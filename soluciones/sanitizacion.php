<?php
$pageTitle = "Línea de Sanitización | Apracom";
include __DIR__ . "/../includes/header.php";
?>

<style>
    /* ==========================================================================
       1. HERO: SANITIZACIÓN (100vh & Responsive)
       ========================================================================== */
    .hero-sanitizacion {
        position: relative;
        height: 100vh;
        min-height: 600px;
        display: flex;
        align-items: center;
        background: url('<?= $baseUrl ?>/assets/img/BannerSanitizacion.png') no-repeat center center / cover;
        overflow: hidden;
    }

    .hero-overlay-sani {
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, #002244 0%, rgba(0, 8, 42, 0.55) 40%, rgba(0, 74, 68, 0) 80%);
        z-index: 1;
    }

    .hero-container-sani {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 40px;
    }

    .hero-subtitle { 
        display: block; 
        font-weight: 300; 
        font-size: 1.8rem; 
        color: #fff; 
        margin-bottom: 0.5rem;
        letter-spacing: 1px;
    }

    .hero-title { 
        font-weight: 800; 
        font-size: 4.8rem; 
        color: #fff; 
        line-height: 1.1; 
        margin-bottom: 1.5rem; 
    }

    .hero-description { 
        font-size: 1.3rem; 
        max-width: 550px; 
        line-height: 1.4; 
        margin-bottom: 2.5rem; 
        color: rgba(255, 255, 255, 0.9); 
    }

    .btn-hero-sani {
        background-color: #00a191;
        color: white;
        padding: 16px 45px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
        font-size: 1.1rem;
        display: inline-block;
        transition: 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .btn-hero-sani:hover {
        background-color: #008175;
        transform: translateY(-3px);
    }

    /* Puntos decorativos */
    .hero-dots-sani {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 12px;
        z-index: 2;
    }
    .dot-sani { width: 8px; height: 8px; background: rgba(255, 255, 255, 0.4); border-radius: 50%; }
    .dot-sani.active { width: 24px; background: white; border-radius: 10px; transition: 0.3s; }

    /* ==========================================================================
       2. SECCIÓN: POR QUÉ ELEGIRNOS (Cuadros Adaptables)
       ========================================================================== */
    .section-why {
        background-color: #f4fdfc;
        padding: 80px 0;
        text-align: center;
    }

    .benefit-cards-sani {
        display: flex;
        gap: 25px;
        justify-content: center;
        max-width: 1100px;
        margin: 50px auto 0;
        padding: 0 20px;
    }

    .card-sani {
        background-color: #009650; /* Verde exacto */
        color: white;
        padding: 40px 30px;
        border-radius: 15px;
        flex: 1;
        display: flex;
        align-items: flex-start;
        gap: 20px;
        text-align: left;
        transition: 0.3s;
    }

    .icon-sani {
        flex-shrink: 0;
        width: 50px;
        height: 50px;
        stroke: white;
    }

    .text-sani h3 { font-size: 1.4rem; margin-bottom: 10px; font-weight: 700; line-height: 1.2; }
    .text-sani p { font-size: 0.95rem; opacity: 0.9; line-height: 1.5; }

    /* ==========================================================================
       3. SECCIÓN: CATEGORÍAS (Grilla)
       ========================================================================== */
    .category-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        margin-top: 30px;
    }

    .btn-cat {
        background: linear-gradient(90deg, #009650 0%, #1a2622 100%);
        color: white;
        padding: 18px 25px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 15px;
        transition: 0.3s ease;
        font-size: 1rem;
    }

    .btn-cat:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .btn-cat img { width: 24px; filter: brightness(0) invert(1); }

    /* ==========================================================================
       4. RESPONSIVE COMPLETO
       ========================================================================== */
    @media (max-width: 992px) {
        .hero-title { font-size: 3.5rem; }
        
        .flex-container-cat { flex-direction: column !important; gap: 40px !important; }
        .solutions-text, .solutions-image { width: 100% !important; flex: none !important; }
        .solutions-image { order: -1; } /* Imagen arriba en tablet/móvil */

        .benefit-cards-sani { flex-direction: column; align-items: center; }
        .card-sani { width: 100%; max-width: 600px; }
    }

    @media (max-width: 768px) {
        .hero-sanitizacion { height: auto; padding: 120px 0 80px 0; }
        .hero-overlay-sani { background: linear-gradient(to top, rgba(0,34,68,1) 0%, rgba(0,34,68,0.7) 50%, rgba(0,34,68,0.4) 100%); }
        .hero-container-sani { padding: 0 20px; text-align: center; }
        .hero-title { font-size: 2.8rem; }
        .hero-description { margin: 0 auto 2.5rem; }

        .category-grid { grid-template-columns: 1fr; } /* Categorías en 1 sola columna */
        
        .card-sani { flex-direction: column; align-items: center; text-align: center; }
        
        .catalog-flex { flex-direction: column; text-align: center; }
        .catalog-mockup img { max-width: 100%; height: auto; }
    }

    @media (max-width: 480px) {
        .hero-title { font-size: 2.3rem; }
        .section-title { font-size: 1.8rem; }
    }
</style>

<section class="hero-sanitizacion">
    <div class="hero-overlay-sani"></div>
    <div class="hero-container-sani">
        <div class="hero-text animate__animated animate__fadeInLeft">
            <span class="hero-subtitle">Línea de</span>
            <h1 class="hero-title">Sanitización</h1>
            <p class="hero-description">
                Más de 10 años en limpieza y desinfección profesional. Atención técnica especializada y formulaciones de calidad para diversas industrias.
            </p>
            <a href="<?= $baseUrl ?>/contacto.php" class="btn-hero-sani">Contáctanos</a>
        </div>
    </div>
    <div class="hero-dots-sani">
        <span class="dot-sani active"></span>
        <span class="dot-sani"></span>
    </div>
</section>

<section class="section-why">
    <div class="container">
        <h2 class="section-title" style="color: #0d5c4e; font-weight: 800; margin-bottom: 15px; font-size: 2.5rem;">¿Por qué elegir nuestra línea de sanitización?</h2>
        <p style="color: #0d5c4e; font-weight: 500; max-width: 700px; margin: 0 auto; font-size: 1.15rem; line-height: 1.4;">
            10 años de experiencia en químicos de limpieza y desinfección, con soporte técnico y calidad consistente.
        </p>

        <div class="benefit-cards-sani">
            <div class="card-sani">
                <svg class="icon-sani" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <path d="M9 12l2 2 4-4"></path>
                </svg>
                <div class="text-sani">
                    <h3>Limpieza y desinfección para cada operación</h3>
                    <p>Desarrollamos y comercializamos una amplia variedad de químicos para necesidades industriales y del día a día.</p>
                </div>
            </div>

            <div class="card-sani">
                <svg class="icon-sani" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                </svg>
                <div class="text-sani">
                    <h3>Acompañamiento técnico con estándar superior</h3>
                    <p>Asesoría orientada al cliente para definir la mejor solución con tecnología de vanguardia.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding: 100px 0; background: #fff;">
    <div class="container flex-container-cat" style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; align-items: center; gap: 60px;">
        <div class="solutions-text" style="flex: 1;">
            <h2 style="color: #004a44; font-size: 3rem; font-weight: 800; margin-bottom: 20px; line-height: 1;">¡Soluciones ideales para tu operación!</h2>
            <p style="color: #666; font-size: 1.1rem; margin-bottom: 40px;">Selecciona tu categoría y descubre productos diseñados para cada proceso de limpieza y desinfección.</p>
            
            <div class="category-grid">
                <a href="<?= $baseUrl ?>/revista.php?id=sanitizacion" class="btn-cat"><img src="<?= $baseUrl ?>/assets/img/icons/detergente.svg"> Detergentes</a>
                <a href="<?= $baseUrl ?>/revista.php?id=sanitizacion" class="btn-cat"><img src="<?= $baseUrl ?>/assets/img/icons/hogar.svg"> Hogar</a>
                <a href="<?= $baseUrl ?>/revista.php?id=sanitizacion" class="btn-cat"><img src="<?= $baseUrl ?>/assets/img/icons/desinfectante.svg"> Desinfectantes</a>
                <a href="<?= $baseUrl ?>/revista.php?id=sanitizacion" class="btn-cat"><img src="<?= $baseUrl ?>/assets/img/icons/higiene.svg"> Higiene personal</a>
                <a href="<?= $baseUrl ?>/revista.php?id=sanitizacion" class="btn-cat"><img src="<?= $baseUrl ?>/assets/img/icons/horeca.svg"> Horeca</a>
                <a href="<?= $baseUrl ?>/revista.php?id=sanitizacion" class="btn-cat"><img src="<?= $baseUrl ?>/assets/img/icons/laboratorio.svg"> Laboratorios</a>
                <a href="<?= $baseUrl ?>/revista.php?id=sanitizacion" class="btn-cat" style="grid-column: span 1;"><img src="<?= $baseUrl ?>/assets/img/icons/lavanderia.svg"> Lavandería</a>
            </div>
        </div>

        <div class="solutions-image" style="flex: 1;">
            <img src="<?= $baseUrl ?>/assets/img/operarios-sanitizacion.jpg" alt="Operarios" style="width: 100%; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
        </div>
    </div>
</section>

<section style="position: relative; padding: 100px 0; background: #001a18; color: white; overflow: hidden;">
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: url('<?= $baseUrl ?>/assets/img/bg-industrial.webp') center/cover; opacity: 0.3; z-index: 1;"></div>
    <div class="container catalog-flex" style="position: relative; z-index: 2; display: flex; align-items: center; justify-content: space-between; max-width: 1200px; margin: 0 auto; padding: 0 20px; gap: 40px;">
        <div style="max-width: 550px;">
            <h2 style="font-size: 3rem; line-height: 1.1; margin-bottom: 25px; font-weight: 800;">¡Todo para tu limpieza y desinfección industrial!</h2>
            <p style="font-size: 1.1rem; margin-bottom: 35px; opacity: 0.9;">Explora nuestro portafolio de químicos y soluciones. <strong>Descárgalo ahora</strong> y equípate con lo mejor.</p>
            <a href="<?= $baseUrl ?>/assets/docs/catalogos/sanitizacion.pdf" download class="btn-hero-sani">Descargar catálogo</a>
        </div>
        <div class="catalog-mockup">
            <img src="<?= $baseUrl ?>/assets/img/mockup-sanitizacion.webp" alt="Catálogo" style="width: 100%; max-width: 500px; filter: drop-shadow(0 20px 40px rgba(0,0,0,0.5));">
        </div>
    </div>
</section>

<!-- ====================== FOOTER APRACOM ====================== -->

<?php include __DIR__ . "/../includes/footer.php"; ?>
