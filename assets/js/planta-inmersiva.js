/**
 * ============================================================================
 * APRACOM WEB — EXPERIENCIA INMERSIVA "PLANTA DE PRODUCCIÓN"
 * Lógica modular, accesible y responsive: 2.5D Parallax, Scroll Storytelling,
 * Floating sutil, Hotspots interactivos y Flujo Vectorial.
 * ============================================================================
 */

(function () {
  'use strict';

  // ==========================================================================
  // CONFIGURACIÓN GLOBAL EDITABLE
  // ==========================================================================
  const productionMachineConfig = {
    // Parallax 2.5D suave con el ratón (solo Desktop >= 1024px)
    parallax: {
      enabled: true,
      maxRotateY: 1.8,
      maxRotateX: 1.2,
      maxTranslateX: 4,
      maxTranslateY: 3
    },

    // Microanimación flotante muy sutil (profundidad orgánica, no cartoon)
    floating: {
      enabled: false,
      amplitudeY: 3,
      duration: 4.8     // Segundos por ciclo
    },

    // Reflejo metálico periódico sobre el acero
    metallicShine: {
      enabled: true,
      intervalSeconds: 6.5
    },

    // Scroll Storytelling (GSAP + ScrollTrigger)
    scroll: {
      enabled: true,
      scrub: 1.0,
      startTrigger: "top 30%",
      endTrigger: "bottom 80%"
    },

    // Coordenadas de los 3 hotspots sobre el canvas 780x435
    hotspots: [
      {
        id: 1,
        stepIndex: 0,
        name: "Mezclado homogéneo",
        phase: "Fase 1 • Cámara en V",
        desc: "Distribución uniforme y control aséptico de los ingredientes en tambor de acero inoxidable.",
        leftPercent: 43.6,
        topPercent: 43.7
      },
      {
        id: 2,
        stepIndex: 1,
        name: "Control del proceso",
        phase: "Fase 2 • Automatización",
        desc: "Panel digital con monitoreo continuo de parámetros críticos, velocidad y temperatura por lote.",
        leftPercent: 62.5,
        topPercent: 28.8
      },
      {
        id: 3,
        stepIndex: 2,
        name: "Descarga controlada",
        phase: "Fase 3 • Salida Aséptica",
        desc: "Válvula hermética de descarga para extracción uniforme y preservación de inocuidad total.",
        leftPercent: 45.5,
        topPercent: 65.5
      }
    ]
  };

  // ==========================================================================
  // INICIALIZACIÓN
  // ==========================================================================
  document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('.section-planta.apracom-production-section');
    if (!section) return;

    // Elementos del DOM
    const stage = section.querySelector('.apracom-machine-stage');
    const wrapper = section.querySelector('.apracom-machine-wrapper');
    const machineImg = section.querySelector('.apracom-machine-img');
    const shadow = section.querySelector('.apracom-machine-shadow');
    const shine = section.querySelector('.apracom-machine-shine');
    const flowActive = section.querySelector('.apracom-flow-active');
    const flowParticle = section.querySelector('.apracom-flow-particle');
    const hotspots = Array.from(section.querySelectorAll('.apracom-hotspot'));
    const steps = Array.from(section.querySelectorAll('.apracom-prod-step'));
    const badges = Array.from(section.querySelectorAll('.prod-badge-capsule'));

    const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Los hotspots deben seguir siendo utilizables incluso si la librería de
    // animación no está disponible o el usuario reduce el movimiento.
    initHotspotsInteractions(hotspots);

    // Comprobación de GSAP
    if (typeof gsap === 'undefined') {
      console.warn('[Apracom Producción] GSAP no encontrado. Modo estático activado.');
      if (wrapper) wrapper.style.opacity = '1';
      return;
    }

    if (typeof ScrollTrigger !== 'undefined') {
      gsap.registerPlugin(ScrollTrigger);
    }

    // 1. Activar animación de reflejo metálico periódico si está habilitado
    if (shine && productionMachineConfig.metallicShine.enabled && !isReducedMotion) {
      shine.classList.add('is-animated');
    }

    // 2. Accesibilidad: Reducción de movimiento
    if (isReducedMotion) {
      if (flowActive) flowActive.style.strokeDashoffset = '0';
      if (flowParticle) flowParticle.style.opacity = '1';
      steps.forEach(s => s.classList.add('is-active'));
      return;
    }

    // 3. Efecto de entrada suave al llegar a la sección
    initEntranceAnimation(section, wrapper, machineImg, shadow);

    // 4. Microanimación flotante sutil (sine.inOut)
    if (productionMachineConfig.floating.enabled) {
      initFloatingMicroAnimation(wrapper, shadow, productionMachineConfig.floating);
    }

    // 5. Parallax 2.5D con el ratón (Desktop >= 1024px)
    if (productionMachineConfig.parallax.enabled && window.innerWidth >= 1024) {
      initMouseParallax(section, stage, wrapper, productionMachineConfig.parallax);
    }

    // 6. Scroll Storytelling (4 Fases)
    if (typeof ScrollTrigger !== 'undefined' && productionMachineConfig.scroll.enabled) {
      initScrollStorytelling(section, {
        wrapper,
        machineImg,
        shadow,
        flowActive,
        flowParticle,
        hotspots,
        steps,
        badges
      });
    }

  });

  // ==========================================================================
  // 1. EFECTO DE ENTRADA SUAVE
  // ==========================================================================
  function initEntranceAnimation(section, wrapper, machineImg, shadow) {
    gsap.set(wrapper, {
      opacity: 0,
      y: 30,
      scale: 0.96
    });

    if (shadow) {
      gsap.set(shadow, {
        opacity: 0,
        scale: 0.85
      });
    }

    if (typeof ScrollTrigger !== 'undefined') {
      ScrollTrigger.create({
        trigger: section,
        start: "top 80%",
        once: true,
        onEnter: () => {
          gsap.to(wrapper, {
            opacity: 1,
            y: 0,
            scale: 1,
            duration: 1.2,
            ease: "power2.out"
          });
          if (shadow) {
            gsap.to(shadow, {
              opacity: 1,
              scale: 1,
              duration: 1.2,
              ease: "power2.out"
            });
          }
        }
      });
    } else {
      gsap.to(wrapper, { opacity: 1, y: 0, scale: 1, duration: 1.2, ease: "power2.out" });
      if (shadow) gsap.to(shadow, { opacity: 1, scale: 1, duration: 1.2, ease: "power2.out" });
    }
  }

  // ==========================================================================
  // 2. MICROANIMACIÓN FLOTANTE (Profundidad sutil)
  // ==========================================================================
  function initFloatingMicroAnimation(wrapper, shadow, config) {
    const tlFloat = gsap.timeline({
      repeat: -1,
      yoyo: true,
      defaults: { ease: "sine.inOut" }
    });

    tlFloat.to(wrapper, {
      y: `-=${config.amplitudeY}`,
      duration: config.duration / 2
    });

    if (shadow) {
      tlFloat.to(shadow, {
        opacity: 0.82,
        scale: 0.94,
        duration: config.duration / 2
      }, 0);
    }
  }

  // ==========================================================================
  // 3. PARALLAX 2.5D CON QUICKTO (60 FPS, Desktop)
  // ==========================================================================
  function initMouseParallax(section, stage, wrapper, pConfig) {
    const quickRotY = gsap.quickTo(wrapper, "rotationY", { duration: 0.6, ease: "power2.out" });
    const quickRotX = gsap.quickTo(wrapper, "rotationX", { duration: 0.6, ease: "power2.out" });
    const quickX    = gsap.quickTo(wrapper, "x", { duration: 0.6, ease: "power2.out" });
    const quickY    = gsap.quickTo(wrapper, "y", { duration: 0.6, ease: "power2.out" });

    section.addEventListener('mousemove', (e) => {
      const rect = section.getBoundingClientRect();
      const normX = ((e.clientX - rect.left) / rect.width - 0.5) * 2;
      const normY = ((e.clientY - rect.top) / rect.height - 0.5) * 2;

      quickRotY(normX * pConfig.maxRotateY);
      quickRotX(-normY * pConfig.maxRotateX);
      quickX(normX * pConfig.maxTranslateX);
      quickY(normY * pConfig.maxTranslateY);

      // Luz ambiental dinámica que sigue el puntero
      const mousePercentX = ((e.clientX - rect.left) / rect.width) * 100;
      const mousePercentY = ((e.clientY - rect.top) / rect.height) * 100;
      section.style.setProperty('--mouse-x', `${mousePercentX}%`);
      section.style.setProperty('--mouse-y', `${mousePercentY}%`);
    });

    section.addEventListener('mouseleave', () => {
      quickRotY(0);
      quickRotX(0);
      quickX(0);
      quickY(0);
      section.style.setProperty('--mouse-x', '50%');
      section.style.setProperty('--mouse-y', '50%');
    });
  }

  // ==========================================================================
  // ==========================================================================
  // 4. SCROLL STORYTELLING: FLUJO VECTORIAL Y BADGES
  // ==========================================================================
  function initScrollStorytelling(section, elements) {
    const { flowActive, flowParticle, badges } = elements;

    // En móvil/tablet se muestran los elementos estables y accesibles
    if (window.innerWidth < 1024) {
      if (flowActive) flowActive.style.strokeDashoffset = '0';
      if (flowParticle) flowParticle.style.opacity = '1';
      return;
    }

    gsap.timeline({
      scrollTrigger: {
        trigger: section,
        start: productionMachineConfig.scroll.startTrigger,
        end: productionMachineConfig.scroll.endTrigger,
        scrub: productionMachineConfig.scroll.scrub,
        onUpdate: (self) => {
          const progress = self.progress;

          // Animación de flujo técnico SVG con el scroll
          if (flowActive) {
            const dashOffset = 400 - (progress * 400);
            flowActive.style.strokeDashoffset = Math.max(0, Math.min(400, dashOffset));
          }

          if (flowParticle) {
            flowParticle.style.opacity = progress > 0.15 ? '1' : '0';
          }

          // Resaltar badges con el avance del scroll
          if (badges && badges.length >= 3) {
            badges.forEach(b => b.classList.remove('is-highlighted'));
            if (progress >= 0.35 && progress < 0.70) {
              badges[1].classList.add('is-highlighted'); // Control de calidad
            } else if (progress >= 0.70) {
              badges[0].classList.add('is-highlighted'); // Trazabilidad
              badges[2].classList.add('is-highlighted'); // Estandarizado
            }
          }
        }
      }
    });
  }

  // ==========================================================================
  // 5. INTERACCIÓN DE HOTSPOTS (Hover, Focus, Tap, Keyboard)
  // ==========================================================================
  function initHotspotsInteractions(hotspots) {
    hotspots.forEach((hs) => {
      if (hs.dataset.interactionReady === 'true') return;
      hs.dataset.interactionReady = 'true';

      // Click o Tap en Hotspot (ideal para pantallas táctiles y ratón)
      hs.addEventListener('click', (e) => {
        e.stopPropagation();

        // Cerrar todos los demás
        hotspots.forEach(h => {
          h.classList.remove('is-active');
          h.setAttribute('aria-expanded', 'false');
        });

        // La activación es idempotente: incluso un doble evento táctil mantiene
        // abierta la ficha correcta. Para cerrarla se usa Escape o clic fuera.
        hs.classList.add('is-active');
        hs.setAttribute('aria-expanded', 'true');
      });

      // Accesibilidad con teclado: Enter o Space activa; Escape cierra
      hs.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          hs.click();
        } else if (e.key === 'Escape') {
          hs.classList.remove('is-active');
          hs.setAttribute('aria-expanded', 'false');
          hs.blur();
        }
      });
    });

    // Cerrar hotspots al hacer clic/tap fuera de cualquier hotspot
    if (document.body.dataset.productionHotspotsReady !== 'true') {
      document.body.dataset.productionHotspotsReady = 'true';
      document.addEventListener('click', (e) => {
        if (!e.target.closest('.apracom-hotspot')) {
          hotspots.forEach(h => {
            h.classList.remove('is-active');
            h.setAttribute('aria-expanded', 'false');
          });
        }
      });
    }
  }

  // ==========================================================================
  // EXPOSICIÓN GLOBAL PARA INSPECCIÓN Y AJUSTES
  // ==========================================================================
  window.ApracomPlantaProduccion = {
    config: productionMachineConfig,
    refresh: () => {
      if (typeof ScrollTrigger !== 'undefined') ScrollTrigger.refresh();
    }
  };

})();
