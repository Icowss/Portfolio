// Mobile nav toggle
document.addEventListener('DOMContentLoaded', () => {
  const nav = document.getElementById('nav');
  const toggle = document.getElementById('navToggle');
  const links = document.getElementById('navLinks');

  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      const isOpen = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', String(isOpen));
    });
  }

  if (links) {
    links.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // Animate skill bars in once they scroll into view
  const fills = document.querySelectorAll('.skill__fill');
  if ('IntersectionObserver' in window && fills.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const width = el.style.width;
          el.style.width = '0%';
          requestAnimationFrame(() => {
            el.style.transition = 'width 0.9s ease';
            el.style.width = width;
          });
          observer.unobserve(el);
        }
      });
    }, { threshold: 0.4 });

    fills.forEach((el) => observer.observe(el));
  }
});
