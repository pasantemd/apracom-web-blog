<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Rutas a las librerías
require 'includes/libs/PHPMailer/Exception.php';
require 'includes/libs/PHPMailer/PHPMailer.php';
require 'includes/libs/PHPMailer/SMTP.php';

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Location: contacto.php');
    exit();
}

$cleanText = static fn (string $field): string => strip_tags(trim((string) ($_POST[$field] ?? '')));

$nombres = $cleanText('nombres');
$apellidos = $cleanText('apellidos');
$email = filter_var(trim((string) ($_POST['email'] ?? '')), FILTER_VALIDATE_EMAIL);
$empresa = $cleanText('empresa');
$telefono = $cleanText('telefono');
$asunto_web = $cleanText('asunto');
$mensaje = $cleanText('mensaje');

// Validar campos obligatorios antes de seguir
if ($nombres === '' || $apellidos === '' || $email === false || $telefono === '' || $asunto_web === '' || $mensaje === '') {
    header('Location: contacto.php?status=error&msg=Revise los campos obligatorios');
    exit();
}

$smtpPassword = getenv('APRACOM_SMTP_PASSWORD');
if ($smtpPassword === false || $smtpPassword === '') {
    error_log('APRACOM_SMTP_PASSWORD no está configurada.');
    header('Location: contacto.php?status=error&msg=El formulario no está disponible temporalmente');
    exit();
}

try {
    // 1. REGISTRO EN MAUTIC (ID 11)
    $mauticFormId = 11; 
    $mauticBaseUrl = "https://mkt.apracom-ec.com"; 

    $postData = [
        'mauticform[nombre]'    => $nombres,
        'mauticform[apellidos]' => $apellidos,
        'mauticform[empresa]'   => $empresa,
        'mauticform[asunto]'    => $asunto_web,
        'mauticform[email]'     => $email,
        'mauticform[telefono]'  => $telefono,
        'mauticform[mensaje]'   => $mensaje,
        'mauticform[formId]'    => $mauticFormId,
        'mauticform[formName]'  => 'contactowebapracom',
        'mauticform[return]'    => ''
    ];

    $ch = curl_init($mauticBaseUrl . '/form/submit?formId=' . $mauticFormId);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $response = curl_exec($ch);
    $curlError = curl_error($ch);
    curl_close($ch);

    // 2. ENVÍO POR SMTP (PHPMailer)
    $mail = new PHPMailer(true);
    
    // Configuración del servidor
    $mail->isSMTP();
    $mail->Host       = getenv('APRACOM_SMTP_HOST') ?: 'mail.compact-dry.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = getenv('APRACOM_SMTP_USER') ?: 'web@apracom-ec.com';
    $mail->Password   = $smtpPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->CharSet    = 'UTF-8';

    // Destinatarios
    $mail->setFrom($mail->Username, 'Web Apracom');
    $mail->addAddress(getenv('APRACOM_CONTACT_TO') ?: 'web@apracom-ec.com');
    $mail->addReplyTo($email, $nombres . ' ' . $apellidos);

    // Contenido
    $mail->isHTML(true);
    $safeNombres = htmlspecialchars($nombres, ENT_QUOTES, 'UTF-8');
    $safeApellidos = htmlspecialchars($apellidos, ENT_QUOTES, 'UTF-8');
    $safeEmpresa = htmlspecialchars($empresa, ENT_QUOTES, 'UTF-8');
    $safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safeTelefono = htmlspecialchars($telefono, ENT_QUOTES, 'UTF-8');
    $safeAsunto = htmlspecialchars($asunto_web, ENT_QUOTES, 'UTF-8');
    $safeMensaje = nl2br(htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8'));

    $mail->Subject = "Nuevo Lead Web: $asunto_web";
    $mail->Body    = "
        <div style='font-family: Arial, sans-serif; padding: 20px; border: 1px solid #eee;'>
            <h2 style='color: #0072bc;'>Detalles del nuevo prospecto</h2>
            <p><strong>Nombre:</strong> $safeNombres $safeApellidos</p>
            <p><strong>Empresa:</strong> $safeEmpresa</p>
            <p><strong>Email:</strong> $safeEmail</p>
            <p><strong>Teléfono:</strong> $safeTelefono</p>
            <p><strong>Asunto:</strong> $safeAsunto</p>
            <p><strong>Mensaje:</strong><br>$safeMensaje</p>
            <hr>
            <p style='font-size: 11px; color: #999;'>Enviado automáticamente desde el formulario web Apracom.</p>
        </div>";

    $mail->send();
    
    // ÉXITO TOTAL
    header("Location: contacto.php?status=ok");
    exit();

} catch (Exception $e) {
    error_log('Error al enviar el formulario de contacto: ' . $e->getMessage());
    header('Location: contacto.php?status=error&msg=No fue posible enviar el mensaje');
    exit();
}
