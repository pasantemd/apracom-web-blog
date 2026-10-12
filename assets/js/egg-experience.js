/**
 * ============================================================================
 * APRACOM WEB — EXPERIENCIA INMERSIVA "NUESTROS OVOPRODUCTOS"
 * Control centralizado de estados del huevo, ScrollTrigger y Parallax 2.5D
 * 
 * Lógica cinemática:
 * 1. Estado Inicial: Huevo 100% cerrado (eggClosed)
 * 2. Apertura con microdesfase orgánico: shellTop sube primero, shellBottom baja,
 *    clara y yema se revelan, fragmentos reaccionan con pequeño retraso.
 * 3. Transición media: Clara protagonista.
 * 4. Estado final / Paso 3: Composición idéntica a la referencia maestra
 *    (shell-top arriba, clara suspendida, yema centrada debajo, shell-bottom
 *    abierta, cascada de polvo continua saliendo de la cáscara hacia el montículo).
 * ============================================================================
 */

(function () {
  'use strict';

  // ==========================================================================
  // CONFIGURACIÓN CENTRALIZADA DE LOS 3 ESTADOS PRINCIPALES
  // ==========================================================================
  const eggAnimationConfig = {
    scroll: {
      scrub: 0.65,
      startTrigger: "top top",
      endTrigger: "bottom bottom"
    },

    // Parallax 2.5D secundario muy suave con el ratón
    parallax: {
      enabled: true,
      maxRotateX: 1.6,
      maxRotateY: 1.8,
      layerOffsets: {
        eggClosed:   3.5,
        shellTop:    4.5,
        fragments:   5.5,
        white:       3.0,
        yolk:        2.2,
        shellBottom: 1.8,
        powderFall:  1.2,
        powderMound: 0.8
      }
    },

    // ========================================================================
    // DEFINICIÓN DE LOS 3 ESTADOS PRINCIPALES
    // ========================================================================
    states: {
      // ----------------------------------------------------------------------
      // ESTADO 1: HUEVO CERRADO (Tarjeta 1 activa: Huevo Entero)
      // Huevo entero, cerrado e intacto. Capas internas y polvo invisibles.
      // ----------------------------------------------------------------------
      state1: {
        eggClosed:    { opacity: 1, scale: 1.0,  yPercent: 0,    rotation: 0 },
        shellTop:     { opacity: 0, scale: 1.0,  yPercent: 0 },
        fragments:    { opacity: 0, scale: 0.85, yPercent: 0 },
        white:        { opacity: 0, scale: 0.94, yPercent: 0 },
        yolk:         { opacity: 0, scale: 0.94, yPercent: 0 },
        shellBottom:  { opacity: 0, scale: 1.0,  yPercent: 0 },
        powderFall:   { opacity: 0, scaleY: 0.15, yPercent: 4.0 },
        powderMound:  { opacity: 0, scale: 0.85, yPercent: 30.0 }
      },

      // ----------------------------------------------------------------------
      // ESTADO 2: HUEVO ABIERTO TIPO HAMBURGUESA (Tarjeta 2 activa: Clara)
      // Composición en capas ordenadas:
      //   shellTop arriba
      //   eggWhite debajo
      //   yolk al centro
      //   shellBottom abajo
      // Polvo completamente ausente, protagonista es la clara/huevo.
      // ----------------------------------------------------------------------
      state2: {
        eggClosed:    { opacity: 0, scale: 1.015, yPercent: -0.5, rotation: 0.3 },
        shellTop:     { opacity: 1, scale: 1.01,  yPercent: -22.0 },
        fragments:    { opacity: 0.60, scale: 0.98, yPercent: -16.0 },
        white:        { opacity: 1, scale: 1.02,  yPercent: -13.5 },
        yolk:         { opacity: 1, scale: 1.02,  yPercent: -4.5 },
        shellBottom:  { opacity: 1, scale: 1.01,  yPercent: 5.5 },
        powderFall:   { opacity: 0.0, scaleY: 0.20, yPercent: 4.0 },
        powderMound:  { opacity: 0, scale: 0.90, yPercent: 30.0 }
      },

      // ----------------------------------------------------------------------
      // ESTADO 3: POLVO SALIENDO DEL HUEVO ABIERTO (Tarjeta 3 activa: Yema)
      // Misma estructura abierta tipo hamburguesa + cascada continua
      // saliendo desde shellBottom hacia powderMound bien abajo.
      // ----------------------------------------------------------------------
      state3: {
        eggClosed:    { opacity: 0, scale: 1.015, yPercent: -0.5, rotation: 0.3 },
        shellTop:     { opacity: 1, scale: 1.02,  yPercent: -25.5 },
        fragments:    { opacity: 1, scale: 1.02,  yPercent: -18.5 },
        white:        { opacity: 0.95, scale: 1.0, yPercent: -14.0 },
        yolk:         { opacity: 1, scale: 1.03,  yPercent: -4.5 },
        shellBottom:  { opacity: 1, scale: 1.01,  yPercent: 6.5 },
        powderFall:   { opacity: 1, scaleY: 1.38,  yPercent: 26.0 },
        powderMound:  { opacity: 1, scale: 1.0,   yPercent: 30.0 }
      }
    }
  };

  // ==========================================================================
  // INICIALIZACIÓN
  // ==========================================================================
  document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('.section-ovoproductos');
    if (!section) return;

    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
      console.warn('[Apracom Ovoproductos] GSAP o ScrollTrigger no encontrados.');
      return;
    }

    gsap.registerPlugin(ScrollTrigger);

    const stage = section.querySelector('.apracom-egg-stage');
    const layers = {
      eggClosed:   section.querySelector('[data-layer="egg-closed"]'),
      shellTop:    section.querySelector('[data-layer="shell-top"]'),
      fragments:   section.querySelector('[data-layer="shell-fragments"]'),
      white:       section.querySelector('[data-layer="egg-white"]'),
      yolk:        section.querySelector('[data-layer="yolk"]'),
      shellBottom: section.querySelector('[data-layer="shell-bottom"]'),
      powderFall:  section.querySelector('[data-layer="powder-fall"]'),
      powderMound: section.querySelector('[data-layer="powder-mound"]')
    };

    const cards = Array.from(section.querySelectorAll('.apracom-product-step'));
    const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Accesibilidad: reducción de movimiento
    if (isReducedMotion) {
      if (layers.eggClosed) gsap.set(layers.eggClosed, { display: 'none' });
      applyLayerState(layers, eggAnimationConfig.states.state3, true);
      cards.forEach(card => card.classList.add('is-active'));
      return;
    }

    // Estado inicial: Huevo 100% Cerrado (Estado 1)
    applyLayerState(layers, eggAnimationConfig.states.state1, true);
    if (cards[0]) cards[0].classList.add('is-active');

    // ========================================================================
    // LÍNEA DE TIEMPO PRINCIPAL VINCULADA AL SCROLL (SCRUB CONTINUO)
    // 3 Estados Clave y 2 Transiciones Naturales
    // ========================================================================
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: section,
        start: eggAnimationConfig.scroll.startTrigger,
        end: eggAnimationConfig.scroll.endTrigger,
        scrub: eggAnimationConfig.scroll.scrub,
        invalidateOnRefresh: true,
        onUpdate: (self) => {
          syncCardActiveState(self.progress, cards, stage);
        }
      }
    });

    // ------------------------------------------------------------------------
    // ZONA 1: ESTADO 1 — HUEVO CERRADO (t = 0.0 a 1.0)
    // El huevo se mantiene cerrado mientras la tarjeta 1 está activa.
    // ------------------------------------------------------------------------
    tl.to(layers.eggClosed, {
      opacity: 1,
      scale: 1.0,
      yPercent: 0,
      rotation: 0,
      duration: 1.0,
      ease: 'none'
    }, 0);

    // ------------------------------------------------------------------------
    // TRANSICIÓN 1 → 2: APERTURA PROGRESIVA A TIPO HAMBURGUESA (t = 1.0 a 2.4)
    // Microdesfase natural: shellTop sube primero, eggClosed se desvanece,
    // shellBottom baja, white y yolk se revelan al centro, fragments alrededor.
    // ------------------------------------------------------------------------
    tl.to(layers.shellTop, {
      opacity: eggAnimationConfig.states.state2.shellTop.opacity,
      yPercent: eggAnimationConfig.states.state2.shellTop.yPercent,
      scale: eggAnimationConfig.states.state2.shellTop.scale,
      duration: 1.4,
      ease: 'power1.inOut'
    }, 0.1);

    if (layers.eggClosed) {
      tl.to(layers.eggClosed, {
        opacity: 0,
        scale: eggAnimationConfig.states.state2.eggClosed.scale,
        yPercent: eggAnimationConfig.states.state2.eggClosed.yPercent,
        rotation: eggAnimationConfig.states.state2.eggClosed.rotation,
        duration: 1.2,
        ease: 'power1.inOut'
      }, 0.15);
    }

    tl.to(layers.shellBottom, {
      opacity: eggAnimationConfig.states.state2.shellBottom.opacity,
      yPercent: eggAnimationConfig.states.state2.shellBottom.yPercent,
      scale: eggAnimationConfig.states.state2.shellBottom.scale,
      duration: 1.3,
      ease: 'power1.inOut'
    }, 0.2);

    tl.to(layers.white, {
      opacity: eggAnimationConfig.states.state2.white.opacity,
      yPercent: eggAnimationConfig.states.state2.white.yPercent,
      scale: eggAnimationConfig.states.state2.white.scale,
      duration: 1.3,
      ease: 'power1.inOut'
    }, 0.25)
    .to(layers.yolk, {
      opacity: eggAnimationConfig.states.state2.yolk.opacity,
      yPercent: eggAnimationConfig.states.state2.yolk.yPercent,
      scale: eggAnimationConfig.states.state2.yolk.scale,
      duration: 1.3,
      ease: 'power1.inOut'
    }, 0.25);

    tl.to(layers.fragments, {
      opacity: eggAnimationConfig.states.state2.fragments.opacity,
      yPercent: eggAnimationConfig.states.state2.fragments.yPercent,
      scale: eggAnimationConfig.states.state2.fragments.scale,
      duration: 1.2,
      ease: 'power1.inOut'
    }, 0.35);

    tl.to(layers.powderMound, {
      opacity: eggAnimationConfig.states.state2.powderMound.opacity,
      scale: eggAnimationConfig.states.state2.powderMound.scale,
      yPercent: eggAnimationConfig.states.state2.powderMound.yPercent,
      duration: 1.2,
      ease: 'power1.inOut'
    }, 0.35);

    // ------------------------------------------------------------------------
    // ZONA 2: ESTADO 2 — HUEVO ABIERTO TIPO HAMBURGUESA (t = 2.4 a 3.6)
    // Se mantiene la hamburguesa ordenada y nítida. Polvo ausente.
    // ------------------------------------------------------------------------
    tl.to(layers.white, {
      yPercent: eggAnimationConfig.states.state2.white.yPercent,
      duration: 1.2,
      ease: 'none'
    }, 1.5);

    // ------------------------------------------------------------------------
    // TRANSICIÓN 2 → 3: EL POLVO EMPIEZA A SALIR DEL HUEVO (t = 3.6 a 4.8)
    // El huevo mantiene su estructura abierta tipo hamburguesa, y ahora
    // el polvo emerge progresivamente saliendo de shellBottom hacia powderMound.
    // ------------------------------------------------------------------------
    tl.to(layers.shellTop, {
      yPercent: eggAnimationConfig.states.state3.shellTop.yPercent,
      scale: eggAnimationConfig.states.state3.shellTop.scale,
      duration: 1.2,
      ease: 'power1.inOut'
    }, 2.0);

    tl.to(layers.fragments, {
      opacity: eggAnimationConfig.states.state3.fragments.opacity,
      yPercent: eggAnimationConfig.states.state3.fragments.yPercent,
      scale: eggAnimationConfig.states.state3.fragments.scale,
      duration: 1.2,
      ease: 'power1.inOut'
    }, 2.0);

    tl.to(layers.white, {
      opacity: eggAnimationConfig.states.state3.white.opacity,
      yPercent: eggAnimationConfig.states.state3.white.yPercent,
      scale: eggAnimationConfig.states.state3.white.scale,
      duration: 1.2,
      ease: 'power1.inOut'
    }, 2.0);

    tl.to(layers.yolk, {
      opacity: eggAnimationConfig.states.state3.yolk.opacity,
      yPercent: eggAnimationConfig.states.state3.yolk.yPercent,
      scale: eggAnimationConfig.states.state3.yolk.scale,
      duration: 1.2,
      ease: 'power1.inOut'
    }, 2.0);

    tl.to(layers.shellBottom, {
      yPercent: eggAnimationConfig.states.state3.shellBottom.yPercent,
      scale: eggAnimationConfig.states.state3.shellBottom.scale,
      duration: 1.2,
      ease: 'power1.inOut'
    }, 2.0);

    // Cascada de polvo saliendo continuamente desde la cáscara hacia el montículo
    tl.to(layers.powderFall, {
      opacity: eggAnimationConfig.states.state3.powderFall.opacity,
      scaleY: eggAnimationConfig.states.state3.powderFall.scaleY,
      yPercent: eggAnimationConfig.states.state3.powderFall.yPercent,
      duration: 1.2,
      ease: 'power1.inOut'
    }, 2.0);

    tl.to(layers.powderMound, {
      opacity: eggAnimationConfig.states.state3.powderMound.opacity,
      scale: eggAnimationConfig.states.state3.powderMound.scale,
      yPercent: eggAnimationConfig.states.state3.powderMound.yPercent,
      duration: 1.2,
      ease: 'power1.inOut'
    }, 2.0);

    // ------------------------------------------------------------------------
    // ZONA 3: ESTADO 3 — POLVO SALIENDO DEL HUEVO ABIERTO (t = 4.8 a 6.0)
    // Se mantiene firmemente el huevo abierto con el flujo de polvo continuo.
    // ------------------------------------------------------------------------
    tl.to(layers.powderFall, {
      opacity: 1,
      scaleY: eggAnimationConfig.states.state3.powderFall.scaleY,
      yPercent: eggAnimationConfig.states.state3.powderFall.yPercent,
      duration: 1.2,
      ease: 'none'
    }, 3.2);

    // ========================================================================
    // PARALLAX 2.5D INTERACTIVO CON EL MOUSE (DESKTOP)
    // ========================================================================
    if (eggAnimationConfig.parallax.enabled && window.innerWidth >= 1024) {
      initMouseParallax(section, stage, layers, eggAnimationConfig.parallax);
    }

    // Actualización en cambio de tamaño
    window.addEventListener('resize', debounce(() => {
      ScrollTrigger.refresh();
    }, 200));
  });

  // ==========================================================================
  // SINCRONIZACIÓN PRECISA CON LAS 3 TARJETAS
  // ==========================================================================
  function syncCardActiveState(progress, cards, stage) {
    if (!cards || cards.length === 0) return;

    // Sincronización exacta 1 a 1 con los 3 estados:
    // Tarjeta 1: scroll 0% a 33%   -> Estado 1 (Huevo Cerrado)
    // Tarjeta 2: scroll 33% a 67%  -> Estado 2 (Huevo Abierto Tipo Hamburguesa)
    // Tarjeta 3: scroll 67% a 100% -> Estado 3 (Polvo Saliendo del Huevo Abierto)
    let activeIndex = 0;
    if (progress < 0.25) {
      activeIndex = 0; // Tarjeta 1
    } else if (progress < 0.60) {
      activeIndex = 1; // Tarjeta 2
    } else {
      activeIndex = 2; // Tarjeta 3
    }

    cards.forEach((card, idx) => {
      if (idx === activeIndex) {
        card.classList.add('is-active');
      } else {
        card.classList.remove('is-active');
      }
    });

    if (stage) {
      if (activeIndex === 1) {
        stage.classList.add('highlight-white');
        stage.classList.remove('highlight-yolk');
        stage.classList.remove('show-particles');
      } else if (activeIndex === 2) {
        stage.classList.add('highlight-yolk');
        stage.classList.remove('highlight-white');
        stage.classList.add('show-particles');
      } else {
        stage.classList.remove('highlight-white', 'highlight-yolk', 'show-particles');
      }
    }
  }

  // ==========================================================================
  // APLICACIÓN DE ESTADOS A LAS CAPAS
  // ==========================================================================
  function applyLayerState(layers, stateConfig, immediate) {
    for (const [key, props] of Object.entries(stateConfig)) {
      const el = layers[key];
      if (el) {
        if (immediate) {
          gsap.set(el, props);
        } else {
          gsap.to(el, { ...props, duration: 0.5, overwrite: 'auto' });
        }
      }
    }
  }

  // ==========================================================================
  // PARALLAX 2.5D CON QUICKTO
  // ==========================================================================
  function initMouseParallax(section, stage, layers, pConfig) {
    const stageRotX = gsap.quickTo(stage, 'rotationX', { duration: 0.7, ease: 'power2.out' });
    const stageRotY = gsap.quickTo(stage, 'rotationY', { duration: 0.7, ease: 'power2.out' });

    const layerQuickX = {};
    const layerQuickY = {};

    for (const key of Object.keys(layers)) {
      if (layers[key]) {
        layerQuickX[key] = gsap.quickTo(layers[key], 'x', { duration: 0.7, ease: 'power2.out' });
        layerQuickY[key] = gsap.quickTo(layers[key], 'y', { duration: 0.7, ease: 'power2.out' });
      }
    }

    section.addEventListener('mousemove', (e) => {
      const rect = section.getBoundingClientRect();
      const normX = ((e.clientX - rect.left) / rect.width - 0.5) * 2;
      const normY = ((e.clientY - rect.top) / rect.height - 0.5) * 2;

      stageRotY(normX * pConfig.maxRotateY);
      stageRotX(-normY * pConfig.maxRotateX);

      for (const [key, maxOffset] of Object.entries(pConfig.layerOffsets)) {
        if (layerQuickX[key]) layerQuickX[key](normX * maxOffset);
        if (layerQuickY[key]) layerQuickY[key](normY * maxOffset);
      }

      const mousePercentX = ((e.clientX - rect.left) / rect.width) * 100;
      const mousePercentY = ((e.clientY - rect.top) / rect.height) * 100;
      section.style.setProperty('--mouse-x', `${mousePercentX}%`);
      section.style.setProperty('--mouse-y', `${mousePercentY}%`);
    });

    section.addEventListener('mouseleave', () => {
      stageRotX(0);
      stageRotY(0);
      for (const key of Object.keys(layers)) {
        if (layerQuickX[key]) layerQuickX[key](0);
        if (layerQuickY[key]) layerQuickY[key](0);
      }
    });
  }

  function debounce(func, wait) {
    let timeout;
    return function (...args) {
      clearTimeout(timeout);
      timeout = setTimeout(() => func.apply(this, args), wait);
    };
  }

  window.ApracomEggExperience = {
    config: eggAnimationConfig,
    refresh: () => {
      if (typeof ScrollTrigger !== 'undefined') ScrollTrigger.refresh();
    }
  };

})();
