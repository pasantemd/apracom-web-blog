<?php
$pageTitle = "Apracom - Tecnología, Calidad y Seguridad";
include __DIR__ . "/includes/header.php";
?>

<section class="hero-slider swiper">
  <div class="swiper-wrapper">
    
    <!-- SLIDE 1: TECNOLOGÍA Y CALIDAD (General) -->
    <div class="swiper-slide" style="background: url('<?= $baseUrl ?>/assets/img/Banner.png') no-repeat center center / cover;">
      <div style="position:absolute; inset:0; background:rgba(0,30,48,0.4);"></div>
      <div class="container hero-content-wrapper" style="position:relative; z-index:10; display:flex; align-items:center; height:100%;">
        <div class="hero-text">
          <h1 class="animate__animated animate__fadeInUp">
            Tecnología, calidad y seguridad
            en cada etapa de tu proceso
          </h1>
          <p class="animate__animated animate__fadeInUp animate__delay-1s">
            Impulsamos tu operación con soluciones integrales y soporte técnico
            especializado, enfocados en eficiencia, control e inocuidad.
          </p>
          <a href="<?= $baseUrl ?>/contacto.php" class="btn-primary btn-hero animate__animated animate__fadeInUp animate__delay-2s">
            Contáctanos
          </a>
        </div>
      </div>
    </div>

    <!-- SLIDE 2: INOCUIDAD ALIMENTARIA -->
    <div class="swiper-slide" style="background: url('<?= $baseUrl ?>/assets/img/BannerInocuidad.png') no-repeat center center / cover;">
      <div style="position:absolute; inset:0; background: linear-gradient(to right, rgba(0, 20, 40, 0.85) 30%, rgba(0, 20, 40, 0.2) 100%);"></div>
      <div class="container hero-content-wrapper" style="position:relative; z-index:10; display:flex; align-items:center; height:100%;">
        <div class="hero-text">
          <span style="display: block; font-weight: 300; font-size: 1.8rem; color: #fff; margin-bottom: 0.5rem;">Línea de</span>
          <h1 class="animate__animated animate__fadeInUp" style="font-size: 4.8rem; font-weight: 800; line-height: 1; color: #fff;">
            Inocuidad <br> Alimentaria
          </h1>
          <p class="animate__animated animate__fadeInUp animate__delay-1s" style="font-size: 1.3rem; max-width: 650px; color: rgba(255, 255, 255, 0.9); margin-bottom: 35px;">
            Control microbiológico, cumplimiento normativo y trazabilidad para laboratorios e industrias alimentarias en Ecuador.
          </p>
          <a href="<?= $baseUrl ?>/soluciones/inocuidad.php" class="btn-primary btn-hero animate__animated animate__fadeInUp animate__delay-2s" style="background-color: #0096a0; border-radius: 12px;">
            Ver soluciones
          </a>
        </div>
      </div>
    </div>

    <!-- SLIDE 3: SANITIZACIÓN -->
    <div class="swiper-slide" style="background: url('<?= $baseUrl ?>/assets/img/BannerSanitizacion.png') no-repeat center center / cover;">
      <div style="position:absolute; inset:0; background: linear-gradient(to right, rgba(0, 74, 68, 0.90) 0%, rgba(0, 74, 68, 0.6) 40%, rgba(0, 74, 68, 0) 80%);"></div>
      <div class="container hero-content-wrapper" style="position:relative; z-index:10; display:flex; align-items:center; height:100%;">
        <div class="hero-text">
          <span style="display: block; font-weight: 300; font-size: 1.8rem; color: #fff; margin-bottom: 0.5rem;">Línea de</span>
          <h1 class="animate__animated animate__fadeInUp" style="font-size: 4.8rem; font-weight: 800; line-height: 1; color: #fff;">
            Sanitización
          </h1>
          <p class="animate__animated animate__fadeInUp animate__delay-1s" style="font-size: 1.3rem; max-width: 650px; color: rgba(255, 255, 255, 0.9); margin-bottom: 35px;">
            Más de 10 años en limpieza y desinfección profesional. Atención técnica especializada y formulaciones de calidad.
          </p>
          <a href="<?= $baseUrl ?>/soluciones/sanitizacion.php" class="btn-primary btn-hero animate__animated animate__fadeInUp animate__delay-2s" style="background-color: #00a191; border-radius: 12px;">
            Ver soluciones
          </a>
        </div>
      </div>
    </div>

    <!-- SLIDE 4: INGREDIENTES -->
    <div class="swiper-slide" style="background: url('<?= $baseUrl ?>/assets/img/BannerIngredientes.png') no-repeat center center / cover;">
      <div style="position:absolute; inset:0; background: linear-gradient(to right, rgba(212, 175, 55, 0.90) 0%, rgba(212, 175, 55, 0.6) 40%, rgba(212, 175, 55, 0) 80%);"></div>
      <div class="container hero-content-wrapper" style="position:relative; z-index:10; display:flex; align-items:center; height:100%;">
        <div class="hero-text">
          <span style="display: block; font-weight: 700; font-size: 1.5rem; color: #fff; margin-bottom: 0.5rem;">Línea de</span>
          <h1 class="animate__animated animate__fadeInUp" style="font-size: 4.8rem; font-weight: 900; line-height: 1; color: #fff; margin-bottom: 1.2rem;">
            Ingredientes
          </h1>
          <p class="animate__animated animate__fadeInUp animate__delay-1s" style="font-size: 1.3rem; max-width: 550px; color: rgba(255, 255, 255, 0.9); margin-bottom: 35px;">
            Ovoproductos en polvo y pasteurizados para optimizar tu producción, con calidad constante y trazabilidad garantizada.
          </p>
          <a href="<?= $baseUrl ?>/soluciones/ingredientes.php" class="btn-primary btn-hero animate__animated animate__fadeInUp animate__delay-2s" style="background-color: #b59a4d; border-radius: 12px;">
            Ver soluciones
          </a>
        </div>
      </div>
    </div>

  </div>
  
  <div class="swiper-pagination"></div>
</section>

<section class="benefits-section" id="soluciones">
  <div class="benefits-inner">

    <div class="benefits-left">
      <h2 class="benefits-title">
        Beneficios<br>
        que <span class="highlight-bg">impulsan</span><br>
        tu operación
      </h2>

      <p class="benefits-desc">
        Soluciones diseñadas para acompañarte y optimizar tus procesos
        en cada área de tu operación.
      </p>

      <div class="benefits-arrow" aria-hidden="true">
        <span>›</span>
      </div>
    </div>

    <div class="benefits-cards">
      <!-- CARD: ACUACULTURA -->
      <a href="" class="benefit-card-link">
        <article class="benefit-card">
          <img src="<?= $baseUrl ?>/assets/img/camaronsosteniblemin14313-6iu8-700w.png" alt="Acuacultura" class="benefit-card-img">
          <div class="benefit-card-icon">
            <img src="<?= $baseUrl ?>/assets/img/icons/icon-acuacultura.svg" alt="Icono">
          </div>
          <div class="benefit-card-overlay">
            <h3 class="benefit-card-title">Acuacultura</h3>
            <p class="benefit-card-desc">Optimiza la operación acuícola con monitoreo y soporte técnico...</p>
          </div>
        </article>
      </a>

      <!-- CARD: INOCUIDAD ALIMENTARIA -->
      <a href="<?= $baseUrl ?>/soluciones/inocuidad.php" class="benefit-card-link">
        <article class="benefit-card">
          <img src="<?= $baseUrl ?>/assets/img/compact00514715-xntf-900w.png" alt="Inocuidad" class="benefit-card-img">
          <div class="benefit-card-icon">
            <img src="<?= $baseUrl ?>/assets/img/icons/icon-inocuidad.svg" alt="Icono">
          </div>
          <div class="benefit-card-overlay">
            <h3 class="benefit-card-title">Inocuidad<br>Alimentaria</h3>
            <p class="benefit-card-desc">Verifica la inocuidad con análisis y soluciones microbiológicas...</p>
          </div>
        </article>
      </a>

      <!-- CARD: INGREDIENTES -->
      <a href="<?= $baseUrl ?>/soluciones/ingredientes.php" class="benefit-card-link">
        <article class="benefit-card">
          <img src="<?= $baseUrl ?>/assets/img/mesadetrabajo13x8014718-ge3i-600w.png" alt="Ingredientes" class="benefit-card-img">
          <div class="benefit-card-icon">
            <img src="<?= $baseUrl ?>/assets/img/icons/icon-ingredientes.svg" alt="Icono">
          </div>
          <div class="benefit-card-overlay">
            <h3 class="benefit-card-title">Ingredientes</h3>
            <p class="benefit-card-desc">Fortalece tu producción con ovoproductos y premezclas...</p>
          </div>
        </article>
      </a>

      <!-- CARD: SANITIZACIÓN -->
      <a href="<?= $baseUrl ?>/soluciones/sanitizacion.php" class="benefit-card-link">
        <article class="benefit-card">
          <img src="<?= $baseUrl ?>/assets/img/imagen14720-guss-400w.png" alt="Sanitización" class="benefit-card-img">
          <div class="benefit-card-icon">
            <img src="<?= $baseUrl ?>/assets/img/icons/icon-sanitizacion.svg" alt="Icono">
          </div>
          <div class="benefit-card-overlay">
            <h3 class="benefit-card-title">Sanitización</h3>
            <p class="benefit-card-desc">Estandariza protocolos de limpieza para reducir riesgos...</p>
          </div>
        </article>
      </a>
    </div>

  </div>
</section>

<!-- ====================== SECCIÓN CATÁLOGOS ====================== -->
<section class="catalogs-section">
  <div class="catalogs-inner">
    <img src="<?= $baseUrl ?>/assets/img/catalogos2x14721-ikcj-400h.png" alt="Catálogos Apracom" class="catalogs-img">
    <div class="catalogs-content">
      <h2 class="catalogs-title">
        ¡Soluciones para tu
        <span class="catalogs-title-highlight">industria!</span>
      </h2>
      <p class="catalogs-desc">
        Explora los catálogos por línea y encuentra productos,
        especificaciones y aplicaciones para acuacultura, inocuidad
        alimentaria, sanitización e ingredientes.
      </p>
      <a href="<?= $baseUrl ?>/catalogos.php" class="btn-catalogs">
        Ver catálogos
      </a>
    </div>
  </div>
</section>

<!-- ====================== SECCIÓN IMPACTO ====================== -->
<section class="impact-section">
  <div class="impact-overlay"></div>
  <div class="impact-inner">
    <div class="impact-grid">
      
      <!-- TÍTULO A LA IZQUIERDA -->
      <div class="impact-main-title">
        <h2>Impulsamos el<br>éxito empresarial</h2>
      </div>

      <!-- BLOQUE DE ESTADÍSTICAS A LA DERECHA -->
      <div class="impact-stats">
        <div class="stat-item">
          <span class="stat-number">+25 años</span>
          <span class="stat-label">en el mercado</span>
        </div>

        <div class="stat-divider"></div>

        <div class="stat-item">
          <span class="stat-number">+4 líneas</span>
          <span class="stat-label">estratégicas</span>
        </div>

        <div class="stat-divider"></div>

        <div class="stat-item">
          <span class="stat-number">+13,000</span>
          <span class="stat-label">productos</span>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
/* ==========================================================================
   REGLAS GLOBALES PARA SWIPER (Fuera de Media Queries para evitar fallos en PC)
   ========================================================================== */
.hero-slider .swiper-slide {
    opacity: 0 !important;
    visibility: hidden;
    pointer-events: none;
    transition: opacity 0.6s ease-in-out, visibility 0.6s ease-in-out;
}

.hero-slider .swiper-slide-active {
    opacity: 1 !important;
    visibility: visible;
    pointer-events: auto;
}

.hero-slider {
    margin-top: 0 !important;
    padding-top: 0 !important;
}

/* ==========================================================================
   ADAPTACIÓN MÓVIL (Móviles y Tablets)
   ========================================================================== */
@media (max-width: 768px) {
    .hero-content-wrapper {
        padding: 0 25px !important;
        text-align: center;
        justify-content: center !important;
    }

    .hero-text h1 {
        font-size: 2.2rem !important;
        line-height: 1.2 !important;
        margin-bottom: 15px !important;
    }

    .hero-text p {
        font-size: 1.05rem !important;
        line-height: 1.5 !important;
        margin-bottom: 25px !important;
        max-width: 100% !important;
    }

    .hero-text span {
        font-size: 1.2rem !important;
        margin-bottom: 5px !important;
    }

    .btn-hero {
        width: 80%;
        padding: 14px 20px !important;
        font-size: 1rem !important;
    }

    /* Degradado optimizado para que el texto centrado sea legible */
    .swiper-slide div[style*="linear-gradient"] {
        background: linear-gradient(to top, 
            rgba(0, 34, 68, 0.9) 20%, 
            rgba(0, 34, 68, 0.5) 50%, 
            rgba(0, 34, 68, 0.3) 100%) !important;
    }
}

@media (max-width: 480px) {
    .hero-text h1 {
        font-size: 1.9rem !important;
    }
    
    .hero-slider, 
    .swiper-slide {
        height: 80vh !important;
    }
}
</style>

<!-- ====================== FOOTER APRACOM ====================== -->

<?php include __DIR__ . "/includes/footer.php"; ?>
