<?php
$pageTitle = "Línea de Inocuidad Alimentaria | Apracom";
$blogStyles = true;
include __DIR__ . "/../includes/header.php";
?>

<!-- ====================== HERO INOCUIDAD (Estilo Full Screen) ====================== -->
<section class="hero-inocuidad">
  <div class="hero-overlay"></div>
  
<!-- Este contenedor es el que evita que el texto se pegue a los bordes -->
  <div class="container hero-container">
    <div class="hero-content animate__animated animate__fadeInLeft">
      <p class="hero-subtitle">Línea de</p>
      <h1 class="hero-title">Inocuidad Alimentaria</h1>
      
      <p class="hero-description">
        Control microbiológico, cumplimiento normativo y trazabilidad <br>
        para laboratorios e industrias alimentarias en Ecuador.
      </p>
      
      <div class="hero-actions">
        <a href="<?= $baseUrl ?>/contacto.php" class="btn-hero-contact">Contáctanos</a>
      </div>
      
    </div>
  </div>

  <!-- Paginación inferior (Dots) -->
  <div class="hero-dots">
    <span class="dot"></span>
    <span class="dot active"></span>
    <span class="dot"></span>
  </div>
</section>

<!-- ====================== PASOS DE GARANTÍA ====================== -->
<section class="inocuidad-steps">
    <div class="container">
        <h2 class="section-title">Así garantizamos inocuidad y trazabilidad</h2>
        <p class="section-subtitle">3 pasos claros, resultados confiables</p>

        <div class="steps-flex">
            <div class="step-item">
                <div class="step-icon-wrapper">
                    <img src="<?= $baseUrl ?>/assets/img/icons/prevenir.svg" alt="Prevenir">
                </div>
                <h3>Prevenir riesgos</h3>
                <p>Detecta y controla puntos críticos con análisis confiables.</p>
            </div>
            
            <div class="step-line"></div>
            
            <div class="step-item">
                <div class="step-icon-wrapper">
                    <img src="<?= $baseUrl ?>/assets/img/icons/cumplir.svg" alt="Cumplir">
                </div>
                <h3>Cumplir con normativas</h3>
                <p>Respalda procesos con evidencia, trazabilidad y control.</p>
            </div>
            
            <div class="step-line"></div>
            
            <div class="step-item">
                <div class="step-icon-wrapper">
                    <img src="<?= $baseUrl ?>/assets/img/icons/reducir.svg" alt="Reducir">
                </div>
                <h3>Reducir tiempos</h3>
                <p>Obtén resultados claros para decidir más rápido en planta.</p>
            </div>
        </div>
    </div>
</section>

<!-- ====================== GRILLA DE ANÁLISIS ====================== -->
<section class="analysis-section">
    <div class="container">
        <h2 class="section-title">¡Soluciones para todo tipo de análisis!</h2>
        <p class="section-subtitle">Encuentra rápidamente el tipo de análisis, método o insumo que necesita tu laboratorio o planta.</p>
        
        <div class="analysis-grid">
            <!-- Fila 1 -->
            <a href="<?= $baseUrl ?>/revista.php?id=inocuidad" class="btn-analysis">
                <img src="<?= $baseUrl ?>/assets/img/icons/compact-dry.svg" alt="Icono">
                <span>Compact Dry</span>
            </a>
            <a href="<?= $baseUrl ?>/revista.php?id=inocuidad" class="btn-analysis">
                <img src="<?= $baseUrl ?>/assets/img/icons/microorganismos.svg" alt="Icono">
                <span>Microorganismos indicadores</span>
            </a>
            <a href="<?= $baseUrl ?>/revista.php?id=inocuidad" class="btn-analysis">
                <img src="<?= $baseUrl ?>/assets/img/icons/alergenos.svg" alt="Icono">
                <span>Alérgenos</span>
            </a>

            <!-- Fila 2 -->
            <a href="<?= $baseUrl ?>/revista.php?id=inocuidad" class="btn-analysis">
                <img src="<?= $baseUrl ?>/assets/img/icons/histamina.svg" alt="Icono">
                <span>Histamina</span>
            </a>
            <a href="<?= $baseUrl ?>/revista.php?id=inocuidad" class="btn-analysis">
                <img src="<?= $baseUrl ?>/assets/img/icons/filtracion.svg" alt="Icono">
                <span>Filtración por membrana</span>
            </a>
            <a href="<?= $baseUrl ?>/revista.php?id=inocuidad" class="btn-analysis">
                <img src="<?= $baseUrl ?>/assets/img/icons/ambiental.svg" alt="Icono">
                <span>Monitoreo ambiental</span>
            </a>

            <!-- Fila 3 -->
            <a href="<?= $baseUrl ?>/revista.php?id=inocuidad" class="btn-analysis">
                <img src="<?= $baseUrl ?>/assets/img/icons/micotoxinas.svg" alt="Icono">
                <span>Micotoxinas</span>
            </a>
            <a href="<?= $baseUrl ?>/revista.php?id=inocuidad" class="btn-analysis">
                <img src="<?= $baseUrl ?>/assets/img/icons/equipos.svg" alt="Icono">
                <span>Equipos e insumos</span>
            </a>
            <a href="<?= $baseUrl ?>/revista.php?id=inocuidad" class="btn-analysis">
                <img src="<?= $baseUrl ?>/assets/img/icons/medios.svg" alt="Icono">
                <span>Medios de cultivo</span>
            </a>

            <!-- Fila 4 (Centrada) -->
            <div class="analysis-centered-row">
                <a href="<?= $baseUrl ?>/revista.php?id=inocuidad" class="btn-analysis">
                    <img src="<?= $baseUrl ?>/assets/img/icons/patogenos.svg" alt="Icono">
                    <span>Patógenos</span>
                </a>
                <a href="<?= $baseUrl ?>/revista.php?id=inocuidad" class="btn-analysis">
                    <img src="<?= $baseUrl ?>/assets/img/icons/antibioticos.svg" alt="Icono">
                    <span>Antibióticos</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="apracom-blog-invite" id="blog" aria-labelledby="blog-invite-title">
    <div class="blog-shell">
        <div class="blog-invite-heading">
            <h2 id="blog-invite-title">Visita nuestro blog de <span>inocuidad</span></h2>
        </div>
        <?php include __DIR__ . '/../includes/blog-feature.php'; ?>
    </div>
</section>

<!-- ====================== CALL TO ACTION: CATÁLOGO ====================== -->
<!-- ====================== SECCIÓN CATÁLOGO (image_1ef86f.png) ====================== -->
<section class="catalog-section">
    <!-- Overlay azul intenso para legibilidad -->
    <div class="catalog-overlay"></div>
    
    <div class="container catalog-container">
        <div class="catalog-grid">
            
            <!-- Texto a la izquierda -->
            <div class="catalog-content">
                <h2 class="catalog-main-title">¡Todo para tu análisis microbiológico!</h2>
                <p class="catalog-text">
                    Explora nuestra selección de equipos e insumos de alta calidad. 
                    <strong>Descárgalo ahora</strong> y equípate con lo mejor.
                </p>
                <a href="<?= $baseUrl ?>/assets/docs/catalogos/inocuidad.pdf" download class="btn-catalog-download">
                    Descargar catálogo
                </a>
            </div>

            <!-- Imagen del catálogo a la derecha -->
            <div class="catalog-mockup">
                <img src="<?= $baseUrl ?>/assets/img/mockup-catalogo.png" alt="Catálogo Apracom">
            </div>

        </div>
    </div>
</section>

<style>
    /* RESET & BASE */
    :root {
        --cyan-apracom: #0096a0;
        --dark-apracom: #002244;
        --text-gray: #666;
    }

    /* HERO STYLE PREMIUM (image_1f07b6.jpg) */
    .hero-inocuidad {
        position: relative;
        height: 100vh;
        display: flex;
        align-items: center;
        background: url('<?= $baseUrl ?>/assets/img/BannerInocuidad.png') no-repeat center center / cover;
        color: white;
        overflow: hidden;
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(0, 20, 40, 0.85) 30%, rgba(0, 20, 40, 0.2) 100%);
        z-index: 1;
    }

   .hero-container {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: 1200px; /* O el ancho que uses en tu header */
    margin: 0 auto;    /* Centra el contenedor */
    padding: 0 40px;   /* Agrega este margen interno para que no pegue al borde */
}
/* También ajusta el contenido interno si es necesario */
.hero-content {
    max-width: 800px;
    text-align: left;
    /* Esto asegura que el texto respete el margen del contenedor */
    padding-left: 0; 
}
    .hero-subtitle { font-size: 1.8rem; font-weight: 300; margin-bottom: 0; letter-spacing: 1px; }
    .hero-title { font-size: 4.8rem; font-weight: 800; line-height: 1; margin-bottom: 1.5rem; }
    .hero-description { font-size: 1.3rem; max-width: 650px; line-height: 1.4; margin-bottom: 2.5rem; opacity: 0.9; }

    .btn-hero-contact {
        background-color: var(--cyan-apracom);
        color: white;
        padding: 16px 45px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
        font-size: 1.1rem;
        display: inline-block;
        transition: 0.3s ease;
    }

    .btn-hero-contact:hover {
        background-color: #00d1b2;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 150, 160, 0.3);
    }

    /* DOTS */
    .hero-dots {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 12px;
        z-index: 2;
    }

    .dot { width: 8px; height: 8px; background: rgba(255, 255, 255, 0.4); border-radius: 50%; }
    .dot.active { width: 24px; background: white; border-radius: 10px; transition: 0.3s; }

    /* SECCIONES COMUNES */
    .section-title { color: var(--dark-apracom); font-weight: 800; font-size: 2.8rem; margin-bottom: 10px; }
    .section-subtitle { color: var(--text-gray); font-size: 1.1rem; margin-bottom: 50px; }

    /* PASOS */
    .inocuidad-steps { background-color: #f0faff; padding: 100px 0; text-align: center; }
    .steps-flex { display: flex; align-items: center; justify-content: center; gap: 30px; }
    .step-item { flex: 1; max-width: 300px; }
    .step-icon-wrapper img { width: 70px; margin-bottom: 20px; }
    .step-line { width: 80px; height: 2px; background: var(--dark-apracom); opacity: 0.1; }

    /* ANÁLISIS GRID */
    .analysis-section { padding: 100px 0; background: #fff; text-align: center; }
    .analysis-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; max-width: 1100px; margin: 0 auto; }
    
    .btn-analysis {
        background: linear-gradient(90deg, #0072bc 0%, #003366 100%);
        color: white;
        padding: 25px 15px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
        font-size: 1.05rem;
        min-height: 90px;
    }
    .btn-analysis:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.2); color: #00d1b2; }

    /* CATÁLOGO CTA */
    .catalog-section { position: relative; padding: 120px 0; background: var(--dark-apracom); color: white; overflow: hidden; }
    .catalog-overlay-bg { position: absolute; inset: 0; background-image: url('<?= $baseUrl ?>/assets/img/image_77c694.jpg'); background-size: cover; background-position: center; opacity: 0.2; z-index: 1; }
    .catalog-flex { position: relative; z-index: 2; display: flex; align-items: center; justify-content: space-between; gap: 60px; }
    .catalog-title { font-size: 3.5rem; font-weight: 800; margin-bottom: 20px; line-height: 1.1; }
    .catalog-desc { font-size: 1.2rem; margin-bottom: 40px; opacity: 0.9; }
    .btn-download { background: var(--cyan-apracom); color: white; padding: 18px 45px; border-radius: 10px; text-decoration: none; font-weight: bold; display: inline-block; transition: 0.3s; }
    .btn-download:hover { background: #00d1b2; transform: scale(1.05); }
    .catalog-image img { width: 100%; max-width: 550px; filter: drop-shadow(0 30px 60px rgba(0,0,0,0.6)); }

    /* RESPONSIVE */
    @media (max-width: 992px) {
        .hero-title { font-size: 3.5rem; }
        .catalog-title { font-size: 2.5rem; }
        .analysis-grid { grid-template-columns: repeat(2, 1fr); }
        .catalog-flex { flex-direction: column; text-align: center; }
    }

    @media (max-width: 768px) {
        .hero-subtitle { font-size: 1.4rem; }
        .hero-title { font-size: 2.8rem; }
        .hero-description { font-size: 1.1rem; }
        .section-title { font-size: 2rem; }
        .steps-flex { flex-direction: column; gap: 50px; }
        .step-line { display: none; }
        .analysis-grid { grid-template-columns: 1fr; }
    }
    
    .catalog-section {
    position: relative;
    padding: 100px 0;
    background-image: url('<?= $baseUrl ?>/assets/img/fondo_inocuidad.webp'); /* Imagen de fondo con manos/guantes */
    background-size: cover;
    background-position: center;
    color: white;
    overflow: hidden;
}

/* Overlay azul idéntico a la imagen */
.catalog-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 70, 120, 0.75); /* Tinte azul profundo */
    z-index: 1;
}

.catalog-container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.catalog-grid {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 50px;
}

/* ESTILO DE TEXTO image_1ef86f.png */
.catalog-content {
    flex: 1;
    max-width: 550px;
}

.catalog-main-title {
    font-size: 3.2rem;
    font-weight: 800; /* Extra bold */
    line-height: 1.1;
    margin-bottom: 25px;
    text-shadow: 0 2px 10px rgba(0,0,0,0.2);
}

.catalog-text {
    font-size: 1.25rem;
    line-height: 1.4;
    margin-bottom: 35px;
    opacity: 0.95;
}

.catalog-text strong {
    font-weight: 700;
}

/* BOTÓN TURQUESA */
.btn-catalog-download {
    background-color: #0096a0; /* Color turquesa Apracom */
    color: white;
    padding: 14px 35px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 1.1rem;
    display: inline-block;
    transition: all 0.3s ease;
}

.btn-catalog-download:hover {
    background-color: #00d1b2;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

/* MOCKUP DEL CATÁLOGO */
.catalog-mockup {
    flex: 1;
    display: flex;
    justify-content: flex-end;
}

.catalog-mockup img {
    width: 60%;
    max-width: 550px;
    /* Efecto de sombra para que "salte" de la pantalla */
    filter: drop-shadow(0 20px 40px rgba(0,0,0,0.4));
    transform: rotate(2deg); /* Ligera rotación para dinamismo */
}

/* RESPONSIVE */
@media (max-width: 992px) {
    .catalog-grid {
        flex-direction: column;
        text-align: center;
    }
    .catalog-main-title {
        font-size: 2.5rem;
    }
    .catalog-mockup {
        justify-content: center;
    }
    .catalog-mockup img {
        max-width: 400px;
    }
}
    
    
.analysis-section {
    padding: 80px 0;
    background-color: #f9f9f9;
    text-align: center;
}

.section-title {
    color: #002244;
    font-weight: 800;
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.section-subtitle {
    color: #444;
    max-width: 600px;
    margin: 0 auto 50px;
    font-size: 1.1rem;
    line-height: 1.4;
}

/* GRILLA PRINCIPAL */
.analysis-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    max-width: 1100px;
    margin: 0 auto;
}

/* BOTÓN CON DEGRADADO E ICONO */
.btn-analysis {
    display: flex;
    align-items: center;
    background: linear-gradient(90deg, #007cc3 0%, #1a2a44 100%); /* Degradado de image_1e871d.png */
    color: white;
    padding: 15px 25px;
    border-radius: 12px;
    text-decoration: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    min-height: 85px;
    text-align: left;
}

.btn-analysis:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    color: #00d1b2;
}

.btn-analysis img {
    width: 40px;
    height: 40px;
    margin-right: 20px;
    filter: brightness(0) invert(1); /* Convierte iconos a blanco si son oscuros */
}

.btn-analysis span {
    font-weight: 700;
    font-size: 1.1rem;
    line-height: 1.2;
}

/* ÚLTIMA FILA CENTRADA */
.analysis-centered-row {
    grid-column: 1 / span 3;
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 5px;
}

.analysis-centered-row .btn-analysis {
    width: calc(33.33% - 14px); /* Mantiene el tamaño de los de arriba */
}

/* RESPONSIVE */
@media (max-width: 992px) {
    .analysis-grid { grid-template-columns: repeat(2, 1fr); }
    .analysis-centered-row { grid-column: auto; display: contents; }
    
    /* 👇 ESTA ES LA LÍNEA MÁGICA QUE TE FALTABA 👇 */
    .analysis-centered-row .btn-analysis { width: 100%; } 
}

@media (max-width: 600px) {
    .analysis-grid { grid-template-columns: 1fr; }
    .btn-analysis { min-height: 70px; }
}    

/* ==========================================================================
       OPTIMIZACIÓN RESPONSIVE (Móvil y Tablet)
       ========================================================================== */
    
    @media (max-width: 992px) {
        /* General */
        .solutions-text, .solutions-image { flex: none; width: 100%; }
        .solutions-image { order: -1; margin-bottom: 40px; }
        section .container { flex-direction: column; }
        
        /* Tarjetas "Por qué elegirnos" */
        .benefit-cards-sani { 
            flex-direction: column; 
            gap: 20px;
        }
        .card-sani {
            padding: 30px 25px;
        }
    }

    @media (max-width: 768px) {
        /* 1. HERO MÓVIL (Ajuste de impacto visual) */
        .hero-sanitizacion { 
            height: 85vh; /* Un poco más corto para ver que hay contenido abajo */
            min-height: 550px;
            text-align: center; /* Centramos para mejor estética móvil */
        }
        
        /* Overlay más oscuro en móvil para asegurar lectura */
        .hero-overlay-sani {
            background: linear-gradient(to top, rgba(0, 34, 68, 0.95) 20%, rgba(0, 34, 68, 0.6) 60%, rgba(0, 74, 68, 0.2) 100%);
        }

        .hero-container-sani {
            padding: 0 25px;
        }

        .hero-subtitle { 
            font-size: 1.3rem; 
            margin-bottom: 10px;
        }

        .hero-title { 
            font-size: 2.8rem; /* Reducido de 4.8rem para que no se corte */
            margin-bottom: 20px;
        }

        .hero-description { 
            font-size: 1.1rem; 
            margin-bottom: 30px;
            max-width: 100%;
        }

        .btn-hero-sani {
            width: 85%; /* Botón más grande y fácil de presionar */
            padding: 15px 25px;
        }

        /* 2. SECCIÓN POR QUÉ ELEGIRNOS */
        .section-title { 
            font-size: 2rem; 
            line-height: 1.2;
        }
        
        .card-sani {
            flex-direction: column; /* Icono arriba del texto */
            align-items: center;
            text-align: center;
            gap: 15px;
        }

        /* 3. CATEGORÍAS */
        .category-grid { 
            grid-template-columns: 1fr; /* Una sola columna en móvil */
            gap: 12px;
        }
        .btn-cat {
            justify-content: center;
        }

        /* 4. BANNER CATÁLOGO */
        .catalog-flex { 
            flex-direction: column; 
            text-align: center;
            gap: 30px;
        }
        .catalog-mockup img {
            max-width: 280px; /* Evita que la imagen sea gigante en móvil */
        }
    }

    @media (max-width: 480px) {
        .hero-title { font-size: 2.3rem; }
        .hero-subtitle { font-size: 1.1rem; }
        .section-title { font-size: 1.8rem; }
    }   
</style>

<!-- ====================== FOOTER APRACOM ====================== -->

<?php include __DIR__ . "/../includes/footer.php"; ?>
