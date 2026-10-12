<?php
$pageTitle = "Contacto | Apracom - Soluciones Industriales";
include __DIR__ . "/includes/header.php";
?>

<style>
    /* Reset y Tipografía */
    .contact-section {
        padding: 60px 0;
        background: #fff;
        font-family: 'Axiforma', sans-serif;
    }

    .container-contact {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Títulos */
    .contact-header {
        text-align: center;
        margin-bottom: 60px;
    }
    .contact-header h1 {
        color: #0072bc;
        font-size: clamp(2.5rem, 8vw, 3.5rem); /* Tamaño fluido */
        font-weight: 800;
        margin-bottom: 10px;
    }

    /* Grilla Principal: Formulario y Mapa */
    .main-grid {
        display: flex;
        gap: 40px;
        flex-wrap: wrap;
        margin-bottom: 50px;
    }
    .form-container {
        flex: 1.5;
        min-width: 300px;
    }
    .map-container {
        flex: 1;
        min-width: 300px;
        height: 450px;
    }
    .map-container iframe {
        width: 100%;
        height: 100%;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    /* Estilos del Formulario */
    .contact-form {
        background: #fdfdfd;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .input-group {
        display: flex;
        gap: 20px;
        margin-bottom: 25px;
    }
    .input-group input, .contact-form textarea {
        flex: 1;
        padding: 12px;
        border: none;
        border-bottom: 2px solid #eee;
        outline: none;
        font-size: 1rem;
        width: 100%;
        transition: border-color 0.3s;
    }
    .input-group input:focus, .contact-form textarea:focus {
        border-bottom-color: #0072bc;
    }
    .btn-submit {
        background: #005691;
        color: white;
        padding: 16px 60px;
        border: none;
        border-radius: 50px;
        font-weight: 700;
        cursor: pointer;
        display: block;
        margin-left: auto;
        transition: 0.3s;
    }
    .btn-submit:hover {
        background: #002B49;
        transform: scale(1.05);
    }

    /* Grilla de Cards Informativas */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }
    .info-card {
        padding: 30px;
        background: #f4f7f9;
        border-radius: 12px;
        transition: all 0.3s ease;
        border-left: 5px solid #ffbc00;
    }
    .info-card:hover {
        background: #002B49;
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .info-card:hover h3, .info-card:hover p, .info-card:hover a {
        color: #fff !important;
    }
    .info-card h3 {
        color: #333;
        font-size: 1.4rem;
        font-weight: 800;
        margin-bottom: 15px;
    }
    .info-card p {
        color: #555;
        margin: 5px 0;
        line-height: 1.5;
        font-size: 1rem;
    }

    /* Media Queries para ajuste fino */
    @media (max-width: 768px) {
        .input-group {
            flex-direction: column;
            gap: 25px;
        }
        .btn-submit {
            width: 100%;
            float: none;
        }
        .map-container {
            height: 300px;
        }
    }
</style>

<div style="height: 50px;"></div>

<section class="contact-section">
    <div class="container-contact">
        
        <div class="contact-header">
            <h1>Contáctanos</h1>
            <p>Expertos en inocuidad y tecnología industrial a su servicio.</p>
        </div>

        <!-- Alertas de Status -->
        <?php if(isset($_GET['status'])): ?>
            <?php if($_GET['status'] == 'ok'): ?>
                <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 30px; text-align: center; border: 1px solid #c3e6cb; font-weight: 600;">
                    ¡Éxito! Su mensaje ha sido enviado correctamente.
                </div>
            <?php elseif($_GET['status'] == 'error'): ?>
                <div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 8px; margin-bottom: 30px; text-align: center; border: 1px solid #f5c6cb;">
                    <strong>Error al enviar:</strong> <?php echo htmlspecialchars($_GET['msg'] ?? 'Error desconocido.'); ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>


        
        <div class="main-grid">
            <!-- Columna Formulario -->
            <div class="form-container">
                <form action="<?= $baseUrl ?>/procesar_contacto.php" method="POST" class="contact-form">
                    <div class="input-group">
                        <input type="text" name="nombres" placeholder="Nombres*" required>
                        <input type="text" name="apellidos" placeholder="Apellidos*" required>
                    </div>
                    <div class="input-group">
                        <input type="text" name="empresa" placeholder="Empresa">
                        <input type="email" name="email" placeholder="Email*" required>
                    </div>
                    <div class="input-group">
                        <input type="tel" name="telefono" placeholder="Teléfono*" required>
                        <input type="text" name="asunto" placeholder="Asunto*" required>
                    </div>
                    <textarea name="mensaje" placeholder="¿En qué podemos ayudarle?*" required></textarea>
                    <button type="submit" class="btn-submit">Enviar Mensaje</button>
                </form>
            </div>

            <!-- Columna Mapa -->
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4905.755211104065!2d-79.8244441!3d-2.1917171999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6d004425be77%3A0x3b97cef504f3451b!2sAPRACOM%20S.A!5e1!3m2!1ses-419!2sec!4v1778534781675!5m2!1ses-419!2sec" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!-- Cards de información -->
        <div class="info-grid">
            <div class="info-card">
                <h3>Oficina Principal:</h3>
                <p>Vía Durán Tambo Km. 4.5<br>Parque Industrial Sai Baba<br>Durán Bodegas 14</p>
            </div>

            <div class="info-card">
                <h3>Contacto:</h3>
                <p><a href="mailto:ventas@apracom-ec.com" style="text-decoration: none; color: inherit;">ventas@apracom-ec.com</a></p>
                <p>+593 04-3755215</p>
                <p>+593 963871986</p>
            </div>

            <div class="info-card">
                <h3>Horarios:</h3>
                <p>Lunes a Viernes</p>
                <p>8:00 am a 17:00 pm</p>
            </div>
        </div>
    </div>
</section>

<div style="height: 50px;"></div>

<!-- ====================== FOOTER APRACOM ====================== -->

<?php include __DIR__ . "/includes/footer.php"; ?>
