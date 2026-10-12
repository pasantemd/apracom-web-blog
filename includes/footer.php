<footer class="apracom-footer">

    <!-- Capa de fondo para la imagen footer.webp con hexágonos -->
    <div class="apracom-footer-hex-bg"></div>

    <div class="apracom-footer-inner">
        <div class="apracom-footer-grid">

            <!-- Columna 1: Marca y Redes Sociales -->
            <div class="apracom-footer-brand">
                <a href="<?= $baseUrl ?>/">
                    <img src="<?= $baseUrl ?>/assets/img/logo-apracom-white.svg" alt="Apracom" class="apracom-footer-logo">
                </a>
                
                <p class="apracom-footer-tagline">
                    Síguenos y conoce nuestras<br>
                    soluciones
                </p>

                <div class="apracom-footer-social">
                    <a href="https://ec.linkedin.com/company/apracomsa" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <img src="<?= $baseUrl ?>/assets/img/icons/linkedin.svg" alt="LinkedIn">
                    </a>
                    <a href="https://www.facebook.com/APRACOM.EC/" target="_blank" rel="noopener" aria-label="Facebook">
                        <img src="<?= $baseUrl ?>/assets/img/icons/facebook.svg" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/apracom.ec/" target="_blank" rel="noopener" aria-label="Instagram">
                        <img src="<?= $baseUrl ?>/assets/img/icons/ig.svg" alt="Instagram">
                    </a>
                </div>

                <!-- Certificación ISO -->
                <div class="apracom-footer-cert-box">
                    <img src="<?= $baseUrl ?>/assets/img/sello-iso-9001.png" alt="Certified ISO 9001:2015">
                </div>
            </div>

            <!-- Columna 2: Navegación Institucional -->
            <div class="apracom-footer-col">
                <h3>Somos Apracom</h3>
                <ul>
                    <li><a href="<?= $baseUrl ?>/nosotros.php">Historia de Apracom</a></li>
                    <li><a href="<?= $baseUrl ?>/nosotros.php#valores">Valores corporativos</a></li>
                    <li><a href="<?= $baseUrl ?>/#soluciones">Soluciones industriales</a></li>
                </ul>
            </div>

            <!-- Columna 3: Información Legal -->
            <div class="apracom-footer-col">
                <h3>Información Legal</h3>
                <ul>
                    <li><a href="<?= $baseUrl ?>/politica.php">Términos y condiciones</a></li>
                    <li><a href="<?= $baseUrl ?>/politica.php">Política de privacidad</a></li>
                    <li><a href="<?= $baseUrl ?>/politica.php">Política de cookies</a></li>
                </ul>
            </div>

            <!-- Columna 4: Canales de Atención (RESTAURADOS) -->
            <div class="apracom-footer-col apracom-footer-contact">
                <h3>Atención al cliente</h3>

                <div class="apracom-footer-contact-item">
                    <strong>Línea Acuacultura</strong>
                    <a href="mailto:ventasaq1@apracom-ec.com">ventasaq1@apracom-ec.com</a>
                </div>

                <div class="apracom-footer-contact-item">
                    <strong>Inocuidad Alimentaria</strong>
                    <a href="mailto:ventas@apracom-ec.com">ventas@apracom-ec.com</a>
                </div>

                <div class="apracom-footer-contact-item">
                    <strong>Sanitización</strong>
                    <a href="mailto:ventas@apracom-ec.com">ventas@apracom-ec.com</a>
                </div>

                <div class="apracom-footer-contact-item">
                    <strong>Ingredientes</strong>
                    <a href="mailto:ventas@apracom-ec.com">ventas@apracom-ec.com</a>
                </div>
            </div>

        </div>

        <!-- Ubicación Geográfica -->
        <p class="apracom-footer-address">
            Vía Durán Tambo Km. 4.5 – Parque Industrial Sai Baba, Durán - Ecuador
        </p>
    </div>

    <!-- Barra de Copyright Turquesa -->
    <div class="apracom-footer-bottom">
        <div class="container">
            © 2026 Apracom – Más de 25 años tecnificando el futuro en el Ecuador.
        </div>
    </div>

</footer>

<!-- SCRIPTS CON RUTAS ABSOLUTAS -->
<script src="<?= $baseUrl ?>/assets/js/main.js?v=<?= filemtime(__DIR__ . '/../assets/js/main.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Swiper Config -->
<script>
    const swiper = new Swiper('.hero-slider', {
        loop: true,
        observer: true,
        observeParents: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        effect: 'fade',
        fadeEffect: { crossFade: true },
    });
</script>

<!-- Contador Animado con IntersectionObserver -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 100; 

    const animateCounters = (counter) => {
        const originalText = counter.innerText;
        const target = +originalText.replace(/\D/g, ''); 
        const hasPlus = originalText.includes('+');

        const updateCount = () => {
            const current = +counter.innerText.replace(/\D/g, '');
            const increment = target / speed;

            if (current < target) {
                const nextVal = Math.ceil(current + increment);
                counter.innerText = (hasPlus ? '+' : '') + nextVal.toLocaleString('en-US');
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = originalText;
            }
        };
        counter.innerText = (hasPlus ? '+' : '') + '0';
        updateCount();
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(c => observer.observe(c));
});
</script>
</body>
</html>
