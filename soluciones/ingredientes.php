<?php
$pageTitle = "Línea de Ingredientes | Apracom";
include __DIR__ . "/../includes/header.php";
?>

<style>
    /* ==========================================================================
       RESET Y BASE
       ========================================================================== */
    :root {
        --gold-apracom: #b59a4d;
        --gold-hover: #d4af37;
        --dark-brown: #3b3012;
        --dark-bg: #1a1a1a;
    }

    /* ==========================================================================
       1. HERO SECTION (100vh)
       ========================================================================== */
    .hero-ingredientes {
        position: relative;
        height: 100vh;
        min-height: 600px;
        display: flex;
        align-items: center;
        background: url('<?= $baseUrl ?>/assets/img/BannerIngredientes.png') no-repeat center center / cover;
        overflow: hidden;
    }

    /* Degradado amarillo/dorado a la izquierda para legibilidad */
    .hero-ingredientes::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(212, 175, 55, 0.90) 0%, rgba(212, 175, 55, 0.6) 40%, rgba(212, 175, 55, 0) 80%);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .btn-dark-apracom {
        background-color: var(--dark-bg);
        color: white;
        padding: 14px 35px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 700;
        display: inline-block;
        transition: 0.3s;
        border: none;
    }
    .btn-dark-apracom:hover {
        background-color: #000;
        transform: translateY(-2px);
    }

    .hero-dots {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 2;
    }
    .hero-dots span {
        width: 8px; height: 8px; background: rgba(255,255,255,0.5); border-radius: 50%; cursor: pointer;
    }
    .hero-dots span.active { background: #fff; width: 20px; border-radius: 10px; }


    /* ==========================================================================
       2. SECCIÓN OVOPRODUCTOS
       ========================================================================== */
    .section-ovoproductos {
        padding: 100px 0;
        background-color: #fcfcfc;
    }
    
    .flex-split {
        display: flex;
        align-items: center;
        gap: 50px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .ovo-img-main {
        flex: 1;
    }
    .ovo-img-main img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .ovo-text-content {
        flex: 1.2;
    }

    .product-item-card {
        background: #ffffff;
        padding: 25px 30px;
        border-radius: 15px;
        margin-bottom: 20px;
        display: flex;
        gap: 20px;
        align-items: flex-start;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        border-left: 4px solid transparent;
        transition: 0.3s;
    }
    .product-item-card:hover {
        border-left: 4px solid var(--gold-apracom);
        transform: translateX(5px);
    }
    .num-highlight {
        color: var(--gold-hover);
        font-size: 2rem;
        font-weight: 800;
        line-height: 1;
    }

    /* ==========================================================================
       3. SECCIÓN PLANTA DE PRODUCCIÓN
       ========================================================================== */
    .section-planta {
        position: relative;
        padding: 120px 0;
        background: url('<?= $baseUrl ?>/assets/img/bg-planta.webp') no-repeat center center / cover;
    }

    .planta-container {
        position: relative;
        z-index: 2;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: flex-end; /* Texto a la derecha en escritorio */
    }

    .planta-text-box {
        max-width: 600px;
    }

    .btn-gold {
        background-color: var(--gold-apracom);
        color: white;
        padding: 14px 35px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 700;
        display: inline-block;
        transition: 0.3s;
    }
    .btn-gold:hover {
        background-color: var(--gold-hover);
        transform: translateY(-2px);
    }

    /* Botones en una sola línea en escritorio */
    .capsule-wrapper {
        display: flex;
        gap: 12px;
        margin-top: 40px;
        flex-wrap: nowrap; 
        white-space: nowrap;
        overflow-x: auto; 
        padding-bottom: 5px;
    }
    .capsule-outline {
        border: 2px solid #e0e0e0;
        color: #1a1a1a;
        padding: 10px 20px;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 700;
        background: #fff;
    }

    /* ==========================================================================
       4. BANNER CLARA 100% (Superpuesto a la sección anterior)
       ========================================================================== */
    .banner-full {
        width: 100%;
        line-height: 0;
        position: relative; 
        z-index: 10;        
        margin-top: -3%;    
    }
    
    .banner-full img {
        width: 100%;
        height: auto;
    }

    /* ==========================================================================
       5. CTA FINAL
       ========================================================================== */
    .cta-ingredientes-fijo {
        position: relative;
        padding: 120px 0 160px 0; 
        background: url('<?= $baseUrl ?>/assets/img/frascos-final.webp') no-repeat center center / cover;
            margin-top: -7%;
    }

    .cta-container {
        position: relative;
        z-index: 2;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: flex-end; 
    }

    .cta-text-box {
        max-width: 600px;
        color: white;
    }
    .cta-text-box h2 {
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 20px;
    }
    .cta-text-box p {
        font-size: 1.25rem;
        margin-bottom: 35px;
        line-height: 1.4;
    }

/* ==========================================================================
       6. BARRA DE CERTIFICADOS (Imagen Única)
       ========================================================================== */
    .cert-bar {
        width: 100%;
        background: #ffffff;
        position: relative;
        z-index: 5;
    }

    .cert-content {
     max-width: 100%;
    margin: 0 auto;
    padding: 0 0;
    display: flex;
    justify-content: flex-end;
    }

    .cert-content img {
          height: auto;
    max-height: 80px;
    width: auto;
    max-width: 100%;
    object-fit: contain;
    margin-top: -6%;
    }

    /* ==========================================================================
       RESPONSIVE (Ajustes completos para móviles y tablets)
       ========================================================================== */
    @media (max-width: 992px) {
        /* General */
        .flex-split { flex-direction: column; text-align: center; }
        
        /* Planta de Producción */
        .planta-container { justify-content: center; text-align: center; }
        .section-planta { padding: 80px 0; background-position: left center; } /* Centra en móvil */
        
        /* Modificación vital para que los botones cápsula no se desborden en móvil */
        .capsule-wrapper { 
            justify-content: center; 
            flex-wrap: wrap; /* Permite que pasen a la línea de abajo si no caben */
            white-space: normal;
        }
        
        /* CTA Final */
        .cta-container { justify-content: center; text-align: center; }
        .cta-text-box h2 { font-size: 2.8rem; }
        .cta-ingredientes-fijo { padding: 80px 0 180px 0; background-position: left center; }
        
        /* Certificados */
        .cert-content { 
            justify-content: center; 
        }
    }

    @media (max-width: 768px) {
        /* Hero */
        .hero-ingredientes::before { background: rgba(212, 175, 55, 0.85); }
        .hero-title { font-size: 3rem !important; }
        .hero-content { text-align: center; }
        .hero-text { margin: 0 auto; }
        
        /* Banner Intermedio (Ajuste de margen negativo para móviles) */
        .banner-full { margin-top: -15px; }

        /* Textos Generales Móvil */
        .planta-text-box h2 { font-size: 2.5rem !important; }
        .cta-text-box h2 { font-size: 2.2rem; }
    }
</style>

<!-- ====================== 1. HERO ====================== -->
<section class="hero-ingredientes">
    <div class="hero-content">
        <div class="hero-text animate__animated animate__fadeInLeft" style="max-width: 500px;">
            <span style="display: block; font-weight: 700; font-size: 1.5rem; color: var(--dark-brown); margin-bottom: 0.5rem;">Línea de</span>
            <h1 class="hero-title" style="font-weight: 900; font-size: 4.5rem; color: var(--dark-bg); margin-bottom: 1.2rem; line-height: 1;">Ingredientes</h1>
            <p style="margin-bottom: 2.5rem; color: #222; line-height: 1.4; font-size: 1.15rem; font-weight: 500;">
                Ovoproductos en polvo y pasteurizados para optimizar tu producción, con calidad constante y trazabilidad garantizada.
            </p>
            <a href="<?= $baseUrl ?>/contacto.php" class="btn-dark-apracom">Contáctanos</a>
        </div>
    </div>
    <div class="hero-dots">
        <span class="active"></span>
        <span></span>
    </div>
</section>

<!-- ====================== 2. OVOPRODUCTOS ====================== -->
<section class="section-ovoproductos">
    <div class="flex-split">
        <!-- Imagen Izquierda (UNA SOLA) -->
        <div class="ovo-img-main">
            <img src="<?= $baseUrl ?>/assets/img/proceso-polvo.webp" alt="Mano con polvo y proceso ovoproductos">
        </div>

        <!-- Textos Derecha -->
        <div class="ovo-text-content">
            <h2 style="color: var(--dark-brown); font-size: 2.8rem; font-weight: 900; margin-bottom: 30px;">Nuestros Ovoproductos</h2>
            
            <div class="product-item-card">
                <span class="num-highlight">1</span>
                <div>
                    <h3 style="color: var(--dark-brown); font-size: 1.2rem; margin-bottom: 8px;">Huevo Entero Deshidratado Pasteurizado</h3>
                    <p style="color: #555; font-size: 0.95rem; line-height: 1.4;">Huevo entero de gallina pasteurizado y deshidratado en polvo, obtenido por rotura mecánica aséptica. Calidad uniforme y trazabilidad para uso industrial, producido en granja propia Ovobrand (Argentina).</p>
                </div>
            </div>

            <div class="product-item-card">
                <span class="num-highlight">2</span>
                <div>
                    <h3 style="color: var(--dark-brown); font-size: 1.2rem; margin-bottom: 8px;">Clara Deshidratada Pasteurizada</h3>
                    <p style="color: #555; font-size: 0.95rem; line-height: 1.4;">Clara de huevo pasteurizada y deshidratada en polvo para formulaciones industriales. Pureza, rendimiento constante y trazabilidad, producida en granja propia Ovobrand (Argentina).</p>
                </div>
            </div>

            <div class="product-item-card">
                <span class="num-highlight">3</span>
                <div>
                    <h3 style="color: var(--dark-brown); font-size: 1.2rem; margin-bottom: 8px;">Yema Deshidratada Pasteurizada</h3>
                    <p style="color: #555; font-size: 0.95rem; line-height: 1.4;">Yema de huevo pasteurizada y deshidratada en polvo para panadería, salsas y formulaciones industriales. Color, sabor y emulsión consistentes, producida en granja propia Ovobrand (Argentina).</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====================== 3. PLANTA DE PRODUCCIÓN ====================== -->
<section class="section-planta">
    <div class="planta-container">
        <!-- Tarjeta de Texto -->
        <div class="planta-text-box">
            <h2 style="color: var(--dark-brown); font-size: 3.2rem; font-weight: 900; margin-bottom: 20px;">Planta de producción</h2>
            <p style="color: #444; font-size: 1.15rem; margin-bottom: 30px; line-height: 1.5;">
                Procesamos ingredientes con un flujo controlado en dos fases, asegurando consistencia, inocuidad y trazabilidad en cada lote.
            </p>
            <a href="https://wa.me/593998263781" class="btn-gold">Hablar con un asesor</a>
            
            <!-- Botones (En móviles se apilan, en PC quedan en 1 línea) -->
            <div class="capsule-wrapper">
                <span class="capsule-outline">Trazabilidad por lote</span>
                <span class="capsule-outline">Control de calidad</span>
                <span class="capsule-outline">Proceso estandarizado</span>
            </div>
        </div>
    </div>
</section>

<!-- ====================== 4. BANNER CLARA 100% ====================== -->
<section class="banner-full">
    <img src="<?= $baseUrl ?>/assets/img/banner-clara-natural.webp" alt="100% Clara de Huevo Natural">
</section>

<!-- ====================== 5. CTA FINAL ====================== -->
<section class="cta-ingredientes-fijo">
    <div class="cta-container">
        
        <!-- Textos y Botón -->
        <div class="cta-text-box animate__animated animate__fadeInRight">
            <h2>¡Es momento de llevar tu producción al siguiente nivel!</h2>
            <p>Mejora la calidad, seguridad y ahorro en cada lote con nuestros ovoproductos.</p>
            <a href="<?= $baseUrl ?>/contacto.php" class="btn-gold">Contáctanos</a>
        </div>

    </div>
</section>
<!-- ====================== 6. BARRA DE CERTIFICADOS ====================== -->
<section class="cert-bar">
    <div class="cert-content">
        <!-- Exactamente solo la imagen, alineada a la derecha -->
        <img src="<?= $baseUrl ?>/assets/img/certificados.webp" alt="Certificados de Calidad Apracom">
    </div>
</section>
<!-- ====================== FOOTER APRACOM ====================== -->

<?php include __DIR__ . "/../includes/footer.php"; ?>
