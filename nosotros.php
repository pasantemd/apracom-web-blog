<?php
$pageTitle = "Nosotros | Apracom - Tecnología y Calidad";
include __DIR__ . "/includes/header.php";
?>

<div style="height: 100px;"></div>

<section class="nosotros-historia" style="padding: 60px 0; background: #fff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; align-items: center; gap: 60px; flex-wrap: wrap;">
        
        <div style="flex: 1.2; min-width: 350px;">
            <div style="position: relative; width: 100%; border-radius: 15px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.15); background: #000;">
                <video
                    autoplay
                    muted
                    loop
                    playsinline
                    controls
                    style="width: 100%; height: auto; display: block; object-fit: cover;"
                >
                    <source src="https://www.dropbox.com/scl/fi/7lf61hxxi4o7gasnchowq/Video-corporativo-Valores-Dashboard.mp4?rlkey=vvf5viznjeveaml81t521dh2y&amp;raw=1" type="video/mp4">
                    Tu navegador no soporta video.
                </video>
            </div>
        </div>

        <div style="flex: 1; min-width: 350px;">
            <h2 style="color: #0072bc; font-size: 3rem; font-weight: 800; margin-bottom: 25px; line-height: 1.1;">Nosotros</h2>
            <p style="color: #333; font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px; text-align: justify;">
                Apracom inició sus operaciones en 1988, a partir de la necesidad prioritaria de contribuir en la seguridad alimentaria y garantizar la calidad de la producción de los alimentos ecuatorianos.
            </p>
            <p style="color: #333; font-size: 1.1rem; line-height: 1.7; margin-bottom: 30px; text-align: justify;">
                Progresivamente fue expandiendo su cartera de clientes y su línea de productos, convirtiéndose en importador de las mejores marcas de microbiología e inocuidad de la industria de los alimentos.
            </p>
            <div style="display: inline-block; padding: 10px 20px; background: #f0f7ff; border-left: 4px solid #0072bc; border-radius: 4px;">
                <h3 style="color: #0072bc; font-size: 1.2rem; font-weight: 700; margin: 0;">¡Juntos, tecnificamos el futuro!</h3>
            </div>
        </div>
    </div>
</section>

<section id="contenedor-interactivo" style="position: relative; height: 75vh; min-height: 600px; display: flex; background: #213b50; overflow: hidden;">
    
    <div class="seccion-bloque" style="flex: 1; position: relative; z-index: 2; color: white; text-align: center; display: flex; justify-content: center; align-items: center; padding: 40px; cursor: pointer; border-right: 1px solid rgba(255,255,255,0.15);">
        <div>
            <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Misión</h2>
            <div class="texto-contenido">
                Ofrecer soluciones integrales en sanitización, inocuidad alimentaria, ingredientes y acuacultura, promoviendo la mejora operativa de nuestros clientes con productos de alta calidad.
            </div>
        </div>
    </div>

    <div class="seccion-bloque" style="flex: 1; position: relative; z-index: 2; color: white; text-align: center; display: flex; justify-content: center; align-items: center; padding: 40px; cursor: pointer; border-right: 1px solid rgba(255,255,255,0.15);">
        <div>
            <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Visión</h2>
            <div class="texto-contenido">
                Posicionarnos como líderes en soluciones estratégicas para la industria en Ecuador, destacando por la innovación tecnológica y la excelencia en el servicio técnico especializado.
            </div>
        </div>
    </div>

    <div class="seccion-bloque" style="flex: 1; position: relative; z-index: 2; color: white; text-align: center; display: flex; justify-content: center; align-items: center; padding: 40px; cursor: pointer;">
        <div>
            <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Valores</h2>
            <div class="texto-contenido" style="text-align: left; display: inline-block;">
                • Humildad<br>• Innovación<br>• Trabajo en equipo<br>• Empatía<br>• Compromiso<br>• Integridad
            </div>
        </div>
    </div>
</section>

<section style="padding: 100px 0; background: #fff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 50px;">
        
        <div style="flex: 1; min-width: 300px;">
            <h2 style="color: #002B49; font-size: 3rem; font-weight: 800; line-height: 1.1; margin-bottom: 20px;">¡Distribuimos siempre lo mejor!</h2>
            <p style="color: #555; font-size: 1.2rem; max-width: 480px; line-height: 1.6;">
                Nuestras líneas cuentan con certificaciones internacionales que garantizan la máxima seguridad y eficiencia en sus procesos industriales.
            </p>
        </div>

        <div style="flex: 1; min-width: 300px; text-align: center;">
            <img src="<?= $baseUrl ?>/assets/img/certificados/logos.webp" alt="Certificaciones Internacionales" style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
        </div>
        
    </div>
</section>

<div style="height: 100px;"></div>

<style>
    .texto-contenido {
        font-size: 1.1rem;
        line-height: 1.6;
        max-width: 420px;
        margin: 0 auto;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s ease;
    }
    .seccion-bloque:hover .texto-contenido {
        opacity: 1;
        transform: translateY(0);
    }
    .seccion-bloque:hover {
        background: rgba(0, 114, 188, 0.2);
    }
    @media (max-width: 768px) {
        #contenedor-interactivo { flex-direction: column; height: auto; }
        .seccion-bloque { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.1); padding: 70px 20px; }
        .texto-contenido { opacity: 1; transform: none; }
    }
</style>

<!-- ====================== FOOTER APRACOM ====================== -->

<?php include __DIR__ . "/includes/footer.php"; ?>
