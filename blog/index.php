<?php
$pageTitle = 'Blogs | Apracom';
$pageDescription = 'Conocimientos para la industria alimentaria organizados por líneas de productos Apracom.';
$blogStyles = true;
$blogPage = true;
include __DIR__ . '/../includes/header.php';
?>
<main class="blog-index blog-shell" id="contenido">
    <div class="blog-index-heading">
        <h1>Conocimientos para una industria alimentaria más segura</h1>
    </div>
    <section class="blog-line" id="inocuidad" aria-labelledby="inocuidad-title">
        <div class="blog-line-heading">
            <h2 id="inocuidad-title">Inocuidad</h2>
        </div>
        <?php include __DIR__ . '/../includes/blog-feature.php'; ?>
    </section>
</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>
