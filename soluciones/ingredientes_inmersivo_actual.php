<?php 
  // Título dinámico para la pestaña
  $pageTitle = "Línea de Ingredientes | Apracom"; 
  $hasHero = true;

  include '../includes/header.php';
?>

<!-- Estilos dedicados para la experiencia inmersiva del huevo -->
<link rel="stylesheet" href="../assets/css/egg-experience.css?v=<?= time() ?>">
<!-- Estilos dedicados para la planta de producción inmersiva -->
<link rel="stylesheet" href="../assets/css/planta-inmersiva.css?v=<?= time() ?>">

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
        background: url('../assets/img/BannerIngredientes.png') no-repeat center center / cover;
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
       2. SECCIÓN OVOPRODUCTOS (Gestionada por ../assets/css/egg-experience.css)
       ========================================================================== */

    /* ==========================================================================
       3. SECCIÓN PLANTA DE PRODUCCIÓN (Gestionada por ../assets/css/planta-inmersiva.css)
       ========================================================================== */

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
        background: url('../assets/img/frascos-final.webp') no-repeat center center / cover;
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

<!-- ====================== 2. OVOPRODUCTOS (EXPERIENCIA INMERSIVA 2.5D) ====================== -->
<section class="section-ovoproductos" id="ovoproductos">
    <!-- Cabecera exclusiva para móvil (< 768px) -->
    <div class="ovoproductos-mobile-header">
        <h2 class="apracom-ovoproductos-title">Nuestros Ovoproductos</h2>
    </div>

    <div class="ovoproductos-layout">
        
        <!-- Columna Izquierda: Huevo Inmersivo en Capas (Sticky en Desktop) -->
        <div class="apracom-egg-visual" aria-hidden="true">
            <div class="apracom-egg-ambient"></div>
            <div class="apracom-egg-stage">
                <!-- Partículas sutiles de polvo en cascada -->
                <div class="apracom-egg-particles" aria-hidden="true">
                    <span class="egg-particle p1"></span>
                    <span class="egg-particle p2"></span>
                    <span class="egg-particle p3"></span>
                    <span class="egg-particle p4"></span>
                    <span class="egg-particle p5"></span>
                    <span class="egg-particle p6"></span>
                </div>
                <!-- Capa 0: Huevo completamente cerrado (Estado inicial 0% - 15%) -->
                <img src="../assets/img/huevo/00-egg-closed.png" alt="" class="apracom-egg-layer layer-egg-closed" data-layer="egg-closed">
                <!-- Capa 1: Montículo de polvo (Base) -->
                <img src="../assets/img/huevo/06-powder-mound.png" alt="" class="apracom-egg-layer layer-powder-mound" data-layer="powder-mound">
                <!-- Capa 2: Cascada / Caída de polvo -->
                <img src="../assets/img/huevo/07-powder-fall.png" alt="" class="apracom-egg-layer layer-powder-fall" data-layer="powder-fall">
                <!-- Capa 3: Cáscara inferior -->
                <img src="../assets/img/huevo/05-shell-bottom.png" alt="" class="apracom-egg-layer layer-shell-bottom" data-layer="shell-bottom">
                <!-- Capa 4: Yema -->
                <img src="../assets/img/huevo/04-yolk.png" alt="" class="apracom-egg-layer layer-yolk" data-layer="yolk">
                <!-- Capa 5: Clara -->
                <img src="../assets/img/huevo/03-egg-white.png" alt="" class="apracom-egg-layer layer-white" data-layer="egg-white">
                <!-- Capa 6: Fragmentos de cáscara -->
                <img src="../assets/img/huevo/02-shell-fragments.png" alt="" class="apracom-egg-layer layer-fragments" data-layer="shell-fragments">
                <!-- Capa 7: Cáscara superior -->
                <img src="../assets/img/huevo/01-shell-top.png" alt="" class="apracom-egg-layer layer-shell-top" data-layer="shell-top">
            </div>
        </div>

        <!-- Columna Derecha: Título y Tarjetas de Productos como Pasos -->
        <div class="apracom-product-steps">
            <!-- Paso 1: Huevo Entero -->
            <article class="apracom-product-step is-active" data-step="1">
                <span class="num-highlight">1</span>
                <div>
                    <h3>Huevo Entero Deshidratado Pasteurizado</h3>
                    <p>Huevo entero de gallina pasteurizado y deshidratado en polvo, obtenido por rotura mecánica aséptica. Calidad uniforme y trazabilidad para uso industrial, producido en granja propia Ovobrand (Argentina).</p>
                </div>
            </article>

            <!-- Paso 2: Clara -->
            <article class="apracom-product-step" data-step="2">
                <span class="num-highlight">2</span>
                <div>
                    <h3>Clara Deshidratada Pasteurizada</h3>
                    <p>Clara de huevo pasteurizada y deshidratada en polvo para formulaciones industriales. Pureza, rendimiento constante y trazabilidad, producida en granja propia Ovobrand (Argentina).</p>
                </div>
            </article>

            <!-- Paso 3: Yema -->
            <article class="apracom-product-step" data-step="3">
                <span class="num-highlight">3</span>
                <div>
                    <h3>Yema Deshidratada Pasteurizada</h3>
                    <p>Yema de huevo pasteurizada y deshidratada en polvo para panadería, salsas y formulaciones industriales. Color, sabor y emulsión consistentes, producida en granja propia Ovobrand (Argentina).</p>
                </div>
            </article>
        </div>

    </div>
</section>

<!-- ====================== 3. PLANTA DE PRODUCCIÓN ====================== -->
<section class="section-planta apracom-production-section" id="planta-produccion">
    <div class="apracom-production-container">
        
        <!-- Columna Izquierda: Escenario Sticky de la Máquina Mezcladora -->
        <div class="apracom-machine-column">
            <!-- Halo de Luz Ambiental Dinámica -->
            <div class="apracom-machine-ambient-light" aria-hidden="true"></div>
            
            <!-- Escenario 3D -->
            <div class="apracom-machine-stage">
                <!-- Sombra suave interactiva -->
                <div class="apracom-machine-shadow" aria-hidden="true"></div>
                
                <!-- Contenedor 3D con Floating & Parallax -->
                <div class="apracom-machine-wrapper">
                    <div class="apracom-machine-canvas">
                        
                        <!-- Imagen Aislada de la Mezcladora Industrial -->
                        <img 
                            src="../assets/produccion/mezcladora-industrial.png" 
                            alt="Mezcladora industrial de acero inoxidable para ovoproductos Apracom" 
                            class="apracom-machine-img"
                            loading="lazy"
                            onerror="this.src='../assets/img/maquina.png'"
                        >
                        
                        <!-- Capa de Reflejo Metálico sobre el Acero Inoxidable -->
                        <div class="apracom-machine-shine" aria-hidden="true"></div>
                        
                        <!-- Flujo Técnico Vectorial SVG -->
                        <svg class="apracom-machine-flow-svg" viewBox="0 0 780 435" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <defs>
                                <linearGradient id="apracomFlowGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#b59a4d" stop-opacity="0.8"/>
                                    <stop offset="50%" stop-color="#d4af37" stop-opacity="1"/>
                                    <stop offset="100%" stop-color="#e5c56c" stop-opacity="0.95"/>
                                </linearGradient>
                            </defs>
                            <!-- Trazado técnico punteado base -->
                            <path class="apracom-flow-track" d="M 235 60 L 260 110 Q 290 170 340 190 Q 350 230 355 285 L 355 330" />
                            <!-- Trazado activo animado con el scroll -->
                            <path class="apracom-flow-active" d="M 235 60 L 260 110 Q 290 170 340 190 Q 350 230 355 285 L 355 330" />
                            <!-- Partícula brillante de flujo -->
                            <circle class="apracom-flow-particle" cx="340" cy="190" r="5" />
                        </svg>
                        
                        <!-- Hotspot 1: Tambor principal / cuerpo en V -->
                        <button type="button" class="apracom-hotspot" data-hotspot="1" aria-expanded="false" aria-label="Ver detalles de Mezclado homogéneo">
                            <span class="hotspot-ring" aria-hidden="true"></span>
                            <span class="hotspot-dot" aria-hidden="true"></span>
                            <div class="hotspot-card" role="tooltip">
                                <h4 class="hotspot-card-title">Mezclado homogéneo</h4>
                                <p class="hotspot-card-desc">Distribución uniforme en cámara de acero inoxidable con rotación multidireccional.</p>
                            </div>
                        </button>
                        
                        <!-- Hotspot 2: Panel de control derecho -->
                        <button type="button" class="apracom-hotspot" data-hotspot="2" aria-expanded="false" aria-label="Ver detalles de Control del proceso">
                            <span class="hotspot-ring" aria-hidden="true"></span>
                            <span class="hotspot-dot" aria-hidden="true"></span>
                            <div class="hotspot-card" role="tooltip">
                                <h4 class="hotspot-card-title">Control del proceso</h4>
                                <p class="hotspot-card-desc">Parámetros estandarizados y monitoreo digital continuo para cada ciclo operativo.</p>
                            </div>
                        </button>
                        
                        <!-- Hotspot 3: Salida inferior / boquilla de descarga -->
                        <button type="button" class="apracom-hotspot" data-hotspot="3" aria-expanded="false" aria-label="Ver detalles de Descarga controlada">
                            <span class="hotspot-ring" aria-hidden="true"></span>
                            <span class="hotspot-dot" aria-hidden="true"></span>
                            <div class="hotspot-card" role="tooltip">
                                <h4 class="hotspot-card-title">Descarga controlada</h4>
                                <p class="hotspot-card-desc">Salida uniforme del producto procesado en condiciones asépticas garantizadas.</p>
                            </div>
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Columna Derecha: Contenido y Acciones -->
        <div class="apracom-production-content">
            <h2 class="apracom-production-title">Planta de producción</h2>
            
            <p class="apracom-production-desc">
                Procesamos ingredientes con un flujo controlado en dos fases, asegurando consistencia, inocuidad y trazabilidad en cada lote.
            </p>
            
            <!-- Botón CTA -->
            <a href="https://wa.me/593998263781" target="_blank" rel="noopener" class="btn-gold apracom-prod-cta">
                Hablar con un asesor
            </a>
            
            <!-- Badges Cápsula -->
            <div class="apracom-prod-badges">
                <span class="prod-badge-capsule">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    Trazabilidad por lote
                </span>
                <span class="prod-badge-capsule">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    Control de calidad
                </span>
                <span class="prod-badge-capsule">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 14l-5-5 1.41-1.41L12 14.17l7.59-7.59L21 8l-9 9z"/></svg>
                    Proceso estandarizado
                </span>
            </div>
        </div>
        
    </div>
</section>

<!-- ====================== 4. BANNER CLARA 100% ====================== -->
<section class="banner-full">
    <img src="../assets/img/banner-clara-natural.webp" alt="100% Clara de Huevo Natural">
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
        <img src="../assets/img/certificados.webp" alt="Certificados de Calidad Apracom">
    </div>
</section>
<!-- Librerías GSAP y ScrollTrigger para la experiencia interactiva del huevo y planta -->
<script src="../assets/js/libs/gsap.min.js"></script>
<script src="../assets/js/libs/ScrollTrigger.min.js"></script>
<script src="../assets/js/egg-experience.js?v=<?= time() ?>"></script>
<script src="../assets/js/planta-inmersiva.js?v=<?= time() ?>"></script>

<?php 
  include '../includes/footer.php'; 
?>
