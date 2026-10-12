<?php
$pageTitle = "Catálogos Interactivos - Apracom";
include __DIR__ . "/includes/header.php";
?>

<section class="catalogs-section">
    <br>
    <br>
  <div class="container">
    <h1 class="section-title">Nuestros Catálogos</h1>
    
    <div class="catalogs-grid">
      
      <!-- Catálogo 1 -->
      <article class="catalog-card">
        <div class="catalog-image-wrapper">
          <img src="<?= $baseUrl ?>/assets/img/compactdry.webp" alt="Catálogo Compact Dry">
          <div class="catalog-overlay">
            <a href="<?= $baseUrl ?>/revista.php?id=compact-dry" class="btn-view">Ver Catálogo</a>
          </div>
        </div>
        <h3 class="catalog-name">Compact Dry</h3>
      </article>

      <!-- Catálogo 2 -->
      <article class="catalog-card">
        <div class="catalog-image-wrapper">
          <img src="<?= $baseUrl ?>/assets/img/inocuidad.webp" alt="Catálogo Inocuidad">
          <div class="catalog-overlay">
            <a href="<?= $baseUrl ?>/revista.php?id=inocuidad" class="btn-view">Ver Catálogo</a>
          </div>
        </div>
        <h3 class="catalog-name">Inocuidad</h3>
      </article>

      <!-- Catálogo 3 -->
      <article class="catalog-card">
        <div class="catalog-image-wrapper">
          <img src="<?= $baseUrl ?>/assets/img/sanitizacion.webp" alt="Catálogo Sanitización">
          <div class="catalog-overlay">
            <a href="<?= $baseUrl ?>/revista.php?id=sanitizacion" class="btn-view">Ver Catálogo</a>
          </div>
        </div>
        <h3 class="catalog-name">Sanitización</h3>
      </article>

      <!-- Catálogo 4 -->
      <article class="catalog-card">
        <div class="catalog-image-wrapper">
          <img src="<?= $baseUrl ?>/assets/img/riverlabs.webp" alt="Catálogo Riverlabs">
          <div class="catalog-overlay">
            <a href="<?= $baseUrl ?>/revista.php?id=riverlabs" class="btn-view">Ver Catálogo</a>
          </div>
        </div>
        <h3 class="catalog-name">Riverlabs</h3>
      </article>

    </div>
  </div>
</section>

<!-- ====================== FOOTER APRACOM ====================== -->

<?php include __DIR__ . "/includes/footer.php"; ?>
