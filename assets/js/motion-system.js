/**
 * ============================================================================
 * APRACOM WEB — SISTEMA DE ANIMACIONES CONTEXTUALES (JS CONTROLLER)
 * Control de scroll reveals con IntersectionObserver, gestión de navbar
 * y soporte a prefers-reduced-motion.
 * ============================================================================
 */

(function () {
  'use strict';

  // ==========================================================================
  // CONFIGURACIÓN CENTRALIZADA DE MOVIMIENTO (EDITABLE)
  // ==========================================================================
  window.ApracomMotionConfig = {
    // Multiplicador general de velocidad (1.0 = estándar, 0.8 = más rápido, 1.2 = más lento)
    speedMultiplier: 1.0,

    // Distancias de entrada (en px)
    distances: {
      small: 8,
      medium: 16,
      large: 24
    },

    // Umbral de activación para elementos con scroll reveal
    observerThreshold: 0.12,
    rootMargin: "0px 0px -40px 0px"
  };

  document.addEventListener('DOMContentLoaded', () => {
    const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // ========================================================================
    // 1. SCROLL REVEALS LIGEROS (IntersectionObserver)
    // ========================================================================
    const revealElements = document.querySelectorAll('.reveal-up, .reveal-fade, .reveal-scale, .reveal-line');

    if (isReducedMotion) {
      // En modo reduced motion, mostrar todo inmediatamente sin transición
      revealElements.forEach(el => el.classList.add('is-revealed'));
      return;
    }

    if ('IntersectionObserver' in window && revealElements.length > 0) {
      const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-revealed');
            observer.unobserve(entry.target); // Solo animar una vez
          }
        });
      }, {
        threshold: window.ApracomMotionConfig.observerThreshold,
        rootMargin: window.ApracomMotionConfig.rootMargin
      });

      revealElements.forEach(el => revealObserver.observe(el));
    } else {
      revealElements.forEach(el => el.classList.add('is-revealed'));
    }

    // ========================================================================
    // 2. HEADER SCROLL CON RAF (60 FPS SUAVE)
    // ========================================================================
    const header = document.getElementById('main-header');
    if (header) {
      let isTicking = false;

      const updateHeader = () => {
        const scrollY = window.scrollY || window.pageYOffset;
        if (scrollY > 40) {
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
        isTicking = false;
      };

      window.addEventListener('scroll', () => {
        if (!isTicking) {
          window.requestAnimationFrame(updateHeader);
          isTicking = true;
        }
      }, { passive: true });

      // Ejecución inicial al cargar
      updateHeader();
    }
  });
})();
