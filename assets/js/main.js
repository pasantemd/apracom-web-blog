document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('main-header');
    const mobileBtn = document.querySelector('.mobile-menu-btn');
    const mainNav = document.querySelector('.main-nav');
    const blogDropdown = document.querySelector('.nav-dropdown');
    const blogDropdownToggle = document.querySelector('.nav-dropdown-toggle');

    const closeBlogDropdown = () => {
        if (!blogDropdown || !blogDropdownToggle) return;
        blogDropdown.classList.remove('is-open');
        blogDropdownToggle.setAttribute('aria-expanded', 'false');
        blogDropdownToggle.setAttribute('aria-label', 'Mostrar líneas de blogs');
    };

    const closeMobileMenu = () => {
        if (!mobileBtn || !mainNav) return;
        mainNav.classList.remove('active');
        mobileBtn.classList.remove('is-active');
        mobileBtn.setAttribute('aria-expanded', 'false');
        mobileBtn.setAttribute('aria-label', 'Abrir menú principal');
        document.body.classList.remove('menu-open');
        closeBlogDropdown();
    };

    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 50);
    });

    if (mobileBtn && mainNav) {
        mobileBtn.addEventListener('click', () => {
            const isOpen = mainNav.classList.toggle('active');
            mobileBtn.classList.toggle('is-active', isOpen);
            mobileBtn.setAttribute('aria-expanded', String(isOpen));
            mobileBtn.setAttribute('aria-label', isOpen ? 'Cerrar menú principal' : 'Abrir menú principal');
            document.body.classList.toggle('menu-open', isOpen);
        });

        mainNav.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', closeMobileMenu);
        });

        document.addEventListener('click', (event) => {
            if (mainNav.classList.contains('active') && !mainNav.contains(event.target) && !mobileBtn.contains(event.target)) {
                closeMobileMenu();
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && mainNav.classList.contains('active')) {
                closeMobileMenu();
                mobileBtn.focus();
            }
        });
    }

    if (blogDropdown && blogDropdownToggle) {
        blogDropdownToggle.addEventListener('click', () => {
            const isOpen = blogDropdown.classList.toggle('is-open');
            blogDropdownToggle.setAttribute('aria-expanded', String(isOpen));
            blogDropdownToggle.setAttribute('aria-label', isOpen ? 'Ocultar líneas de blogs' : 'Mostrar líneas de blogs');
        });
    }
});
