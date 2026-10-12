<?php
  http_response_code(404);

  // Configuramos un título claro para la pestaña
  $pageTitle = "Página no encontrada | Apracom"; 
  
  // Llamamos al header (asegúrate de que en header.php ya usas rutas absolutas como /css/style.css)
  include 'includes/header.php'; 
?>

<style>
    .error-section {
        height: 80vh;
        min-height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background-color: #f4fdfc; /* Fondo clarito corporativo */
        padding: 90px 20px 0;
    }

    .error-content h1 {
        font-size: 8rem;
        font-weight: 900;
        color: #002B49; /* Azul oscuro Apracom */
        line-height: 1;
        margin-bottom: 10px;
    }

    .error-content h2 {
        font-size: 2.5rem;
        color: #009CA6; /* Turquesa Apracom */
        font-weight: 700;
        margin-bottom: 20px;
    }

    .error-content p {
        font-size: 1.2rem;
        color: #555;
        max-width: 500px;
        margin: 0 auto 40px auto;
        line-height: 1.5;
    }

    .error-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-404-primary {
        background-color: #009CA6;
        color: white;
        padding: 14px 35px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 700;
        transition: 0.3s;
    }

    .btn-404-primary:hover {
        background-color: #00818a;
        transform: translateY(-2px);
    }

    .btn-404-secondary {
        background-color: transparent;
        color: #002B49;
        border: 2px solid #002B49;
        padding: 12px 35px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 700;
        transition: 0.3s;
    }

    .btn-404-secondary:hover {
        background-color: #002B49;
        color: white;
    }
</style>

<section class="error-section">
    <div class="error-content animate__animated animate__fadeInUp">
        <h1>404</h1>
        <h2>¡Oops! Página no encontrada</h2>
        <p>Parece que el enlace que seguiste está roto o la página fue movida. No te preocupes, volvamos a encontrar el camino.</p>
        
        <div class="error-buttons">
            <a href="<?= $baseUrl ?>/" class="btn-404-primary">Volver al Inicio</a>
            <a href="<?= $baseUrl ?>/contacto.php" class="btn-404-secondary">Contactar a Soporte</a>
        </div>
    </div>
</section>

<?php 
  // Llamamos al footer (asegúrate de usar rutas absolutas como /js/main.js)
  include 'includes/footer.php'; 
?>
