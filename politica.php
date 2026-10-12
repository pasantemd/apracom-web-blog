<?php
$pageTitle = "Políticas Corporativas | Apracom";
include __DIR__ . "/includes/header.php";
?>

<style>
    .policies-section {
        padding: 100px 0;
        background: #f8fafc;
        font-family: 'Axiforma', sans-serif;
    }
    .apracom-policies-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
        gap: 40px;
        margin-top: 50px;
    }
    .policy-card {
        background: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border: 1px solid #eef2f6;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease;
    }
    .policy-card:hover {
        transform: translateY(-10px);
    }
    .policy-header {
        padding: 40px 40px 20px;
        background: linear-gradient(135deg, #002B49 0%, #005691 100%);
        color: #fff;
    }
    .doc-code {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        padding: 5px 15px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .policy-header h2 {
        font-size: 1.8rem;
        font-weight: 800;
        margin: 0;
    }
    .policy-body {
        padding: 40px;
        flex-grow: 1;
    }
    .doc-intro {
        color: #0072bc;
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 25px;
        line-height: 1.4;
    }
    .policy-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .policy-list li {
        position: relative;
        padding-left: 30px;
        margin-bottom: 15px;
        color: #555;
        line-height: 1.6;
    }
    .policy-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #ffbc00; /* Naranja corporativo */
        font-weight: 900;
    }
    .policy-footer {
        padding: 30px 40px;
        background: #fdfdfd;
        border-top: 1px solid #f0f0f0;
    }
    .btn-pdf {
        display: block;
        text-align: center;
        background: #0072bc;
        color: #fff !important;
        text-decoration: none;
        padding: 15px;
        border-radius: 12px;
        font-weight: 700;
        transition: background 0.3s ease;
    }
    .btn-pdf:hover {
        background: #002B49;
    }

    @media (max-width: 600px) {
        .apracom-policies-grid {
            grid-template-columns: 1fr;
        }
        .policy-header h2 { font-size: 1.5rem; }
    }
</style>

<div style="height: 100px;"></div>

<section class="policies-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 20px;">
        
        <div style="text-align: center; max-width: 700px; margin: 0 auto 60px;">
            <h1 style="color: #002B49; font-size: 3.5rem; font-weight: 800; margin-bottom: 20px;">Transparencia y Calidad</h1>
            <p style="color: #666; font-size: 1.2rem; line-height: 1.6;">
                En Apracom, nos regimos por los más altos estándares legales y éticos para garantizar la seguridad de nuestros procesos y la protección de sus datos.
            </p>
        </div>

        <div class="apracom-policies-grid">
            
            <div class="policy-card">
                <div class="policy-header">
                    <span class="doc-code">DIR-POL-001 | v. 5</span>
                    <h2>Política de Calidad</h2>
                </div>
                <div class="policy-body">
                    <p class="doc-intro">Documento que rige la formulación, producción y comercialización de productos Inocuidad, sanitizantes e ingredientes.</p>
                    <ul class="policy-list">
                        <li>Compromiso de satisfacción del cliente.</li>
                        <li>Cumplimiento de requisitos legales aplicables.</li>
                        <li>Mejora continua del Sistema de Gestión.</li>
                        <li>Revisión periódica de objetivos de calidad.</li>
                    </ul>
                </div>
                <div class="policy-footer">
                    <a href="<?= $baseUrl ?>/assets/docs/politicas/DIR-POL-001-Politica-de-Calidad.pdf" download class="btn-pdf">
                        Descargar Política Completa (PDF)
                    </a>
                </div>
            </div>

            <div class="policy-card">
                <div class="policy-header">
                    <span class="doc-code">PDP-POL-001 | v. 1</span>
                    <h2>Privacidad y Protección de Datos</h2>
                </div>
                <div class="policy-body">
                    <p class="doc-intro">Marco normativo basado en la LOPDP para el tratamiento de datos personales.</p>
                    <ul class="policy-list">
                        <li>Responsable y Delegado de Protección (DPD).</li>
                        <li>Finalidades y bases de legitimación.</li>
                        <li>Medidas de seguridad, archivo y custodia.</li>
                        <li>Derechos de acceso, rectificación y eliminación.</li>
                    </ul>
                </div>
                <div class="policy-footer">
                    <a href="<?= $baseUrl ?>/assets/docs/politicas/Politica-de-Privacidad.pdf" download class="btn-pdf">
                        Descargar Política Completa (PDF)
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<div style="height: 100px;"></div>

<!-- ====================== FOOTER APRACOM ====================== -->

<?php include __DIR__ . "/includes/footer.php"; ?>
