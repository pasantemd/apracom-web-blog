<?php
  $catalogosPermitidos = ['compact-dry', 'inocuidad', 'sanitizacion', 'riverlabs'];
  $catalogoSolicitado = $_GET['id'] ?? 'inocuidad';
  $catalogoId = in_array($catalogoSolicitado, $catalogosPermitidos, true) ? $catalogoSolicitado : 'inocuidad';
  $pageTitle = "Visualizador - Apracom";
  include 'includes/header.php'; 
?>

<!-- Librería Flipbook (DFlip) vía CDN para que funcione de una -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dflip/css/dflip.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dflip/css/themify-icons.min.css">

<section class="revista-viewer" style="padding: 120px 0 40px; background: #001e30; min-height: 90vh;">
    <div class="container">
        <!-- Contenedor donde se cargará el PDF como revista -->
        <div id="flipbook-container" style="height: 80vh;"></div>
    </div>
</section>

<!-- Scripts necesarios -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dflip/js/dflip.min.js"></script>

<script>
    jQuery(document).ready(function () {
        // La ruta a tus archivos PDF que subiste
        var pdfUrl = <?= json_encode($basePath . '/assets/docs/catalogos/' . $catalogoId . '.pdf', JSON_UNESCAPED_SLASHES) ?>;
        
        var options = {
            height: 800,
            duration: 800,
            backgroundColor: "#001e30"
        };

        // Iniciamos el visor
        $("#flipbook-container").flipBook(pdfUrl, options);
    });
</script>

<?php include 'includes/footer.php'; ?>
