(() => {
  const section = document.querySelector('.home-benefits');
  if (!section) return;
  const gallery = section.querySelector('.expanding-gallery');
  const panels = [...gallery.querySelectorAll('.gallery-panel')];
  const buttons = panels.map(panel => panel.querySelector('.gallery-expand'));
  let active = null;
  function select(index) {
    active = index;
    panels.forEach((panel, position) => {
      const expanded = position === index;
      panel.classList.toggle('is-expanded', expanded);
      panel.classList.toggle('is-collapsed', index !== null && !expanded);
      buttons[position].setAttribute('aria-expanded', String(expanded));
      panel.querySelector('.gallery-plus').textContent = expanded ? '−' : '+';
    });
  }
  panels.forEach((panel, index) => {
    panel.addEventListener('pointermove', event => {
      if (event.pointerType === 'mouse' && window.matchMedia('(min-width: 561px)').matches && active !== index) select(index);
    });
    panel.addEventListener('focusin', () => select(index));
    buttons[index].addEventListener('click', () => select(index));
    // Clic en cualquier parte de la tarjeta → navega a la página
    panel.addEventListener('click', (e) => {
      // No interferir si hacen clic en el enlace "Ver soluciones" directamente
      if (e.target.closest('.gallery-link')) return;
      const href = panel.dataset.href;
      if (href) window.location.href = href;
    });
    buttons[index].addEventListener('keydown', event => {
      if (event.key === 'Escape') {
        select(null);
        buttons[index].blur();
      }
      if (event.key === 'ArrowRight' || event.key === 'ArrowLeft') {
        event.preventDefault();
        buttons[(index + (event.key === 'ArrowRight' ? 1 : -1) + panels.length) % panels.length].focus();
      }
    });
  });
  gallery.addEventListener('mouseleave', () => {
    if (!gallery.contains(document.activeElement)) select(null);
  });
  gallery.addEventListener('focusout', event => {
    if (!gallery.contains(event.relatedTarget)) select(null);
  });
  section.querySelector('.benefits-next').addEventListener('click', () => {
    select(active === null ? 0 : (active + 1) % panels.length);
  });
})();
