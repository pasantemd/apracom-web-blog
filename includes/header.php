<?php
$siteRoot = str_replace('\\', '/', realpath(__DIR__ . '/..'));
$scriptFile = str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME']);
$scriptUrl = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$relativeScript = substr($scriptFile, strlen($siteRoot));
$basePath = substr($scriptUrl, 0, strlen($scriptUrl) - strlen($relativeScript));
$baseUrl = htmlspecialchars($basePath, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle ?? "Apracom - Tecnología, Calidad y Seguridad", ENT_QUOTES, "UTF-8") ?></title>
  <?php if (!empty($pageDescription)): ?>
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
  <?php endif; ?>
  <?php if (!empty($blogStyles)): ?>
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/blog.css?v=<?= filemtime(__DIR__ . '/../assets/css/blog.css') ?>">
  <?php endif; ?>

  <!-- LIBRERÍAS EXTERNAS -->
  <link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- ESTILOS LOCALES (Rutas absolutas para evitar errores en 404) -->
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/style.css?v=<?= filemtime(__DIR__ . '/../assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/beneficios.css?v=<?= filemtime(__DIR__ . '/../assets/css/beneficios.css') ?>">
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/footer.css?v=<?= filemtime(__DIR__ . '/../assets/css/footer.css') ?>">
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/catalogos.css?v=<?= filemtime(__DIR__ . '/../assets/css/catalogos.css') ?>">
  <link rel="icon" type="image/png" href="<?= $baseUrl ?>/assets/img/favicon.png">

<link rel="apple-touch-icon" href="<?= $baseUrl ?>/assets/img/favicon.png">

<link rel="shortcut icon" href="<?= $baseUrl ?>/assets/img/favicon.png" type="image/x-icon">

  <style>
    .hero-slider { width: 100%; height: 100vh; min-height: 600px; }
    .swiper-slide { position: relative; width: 100%; height: 100%; overflow: hidden; }
    .slide-img-contain { width: 100%; height: 100%; object-fit: contain; background-color: #fff; }
    .slide-img-cover { width: 100%; height: 100%; object-fit: cover; }
  </style>
</head>
<body<?= !empty($blogPage) ? ' class="apracom-blog-page"' : '' ?>>
  <header id="main-header">
    <div class="nav-container">
   <div class="logo">
  <a href="<?= $baseUrl ?>/">
    <img src="<?= $baseUrl ?>/assets/img/logo-apracom.svg" alt="Apracom" class="logo-img logo-white">
    <img src="<?= $baseUrl ?>/assets/img/logo-color.svg" alt="Apracom" class="logo-img logo-color">
  </a>
</div>
      
      <button class="mobile-menu-btn" id="btn-toggle" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Abrir menú principal">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="main-nav" id="main-nav">
        <ul>
          <li><a href="<?= $baseUrl ?>/#soluciones" class="nav-link">Productos</a></li>
          <li><a href="<?= $baseUrl ?>/nosotros.php" class="nav-link">Somos Apracom</a></li>
          <li class="nav-dropdown">
            <div class="nav-dropdown-row">
              <a class="nav-link nav-dropdown-link" href="<?= $baseUrl ?>/blog/">Blogs</a>
              <button class="nav-dropdown-toggle" type="button" aria-expanded="false" aria-controls="blog-menu" aria-label="Mostrar líneas de blogs">
                <span class="nav-dropdown-chevron" aria-hidden="true"></span>
              </button>
            </div>
            <ul class="nav-dropdown-menu" id="blog-menu">
              <li><a href="<?= $baseUrl ?>/blog/#inocuidad">Inocuidad</a></li>
            </ul>
          </li>
          <li><a href="<?= $baseUrl ?>/contacto.php" class="btn-primary nav-cta">Contáctanos</a></li>
        </ul>
      </nav>
    </div>
  </header>
