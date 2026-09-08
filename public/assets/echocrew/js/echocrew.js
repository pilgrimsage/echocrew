/* EchoCrew 2.0 — no dependencies. */
(function () {
  'use strict';

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var isSmall = window.matchMedia('(max-width: 760px)').matches;

  /* ---- sticky nav ---- */
  var nav = document.querySelector('.ec-nav');
  if (nav) {
    var onScroll = function () { nav.classList.toggle('is-stuck', window.scrollY > 24); };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  /* ---- mobile menu ---- */
  var burger = document.querySelector('.ec-nav__burger');
  if (burger) {
    burger.addEventListener('click', function () {
      var open = document.body.classList.toggle('ec-menu-open');
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
      document.body.style.overflow = open ? 'hidden' : '';
    });
    document.querySelectorAll('.ec-mobilenav a').forEach(function (a) {
      a.addEventListener('click', function () {
        document.body.classList.remove('ec-menu-open');
        burger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && document.body.classList.contains('ec-menu-open')) burger.click();
    });
  }

  /* ---- scroll reveal ---- */
  var revealables = document.querySelectorAll('[data-reveal]');
  if (revealables.length) {
    if (reduced || !('IntersectionObserver' in window)) {
      revealables.forEach(function (el) { el.classList.add('is-in'); });
    } else {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          var delay = parseFloat(entry.target.getAttribute('data-reveal')) || 0;
          entry.target.style.transitionDelay = delay + 'ms';
          entry.target.classList.add('is-in');
          io.unobserve(entry.target);
        });
      }, { rootMargin: '0px 0px -8% 0px', threshold: 0.12 });
      revealables.forEach(function (el) { io.observe(el); });
    }
  }

  /* ---- layered parallax (rAF, transform only) ---- */
  var layers = Array.prototype.slice.call(document.querySelectorAll('[data-parallax]'));
  if (layers.length && !reduced) {
    var ticking = false;
    var apply = function () {
      var y = window.scrollY;
      layers.forEach(function (el) {
        var speed = parseFloat(el.getAttribute('data-parallax')) || 0;
        if (isSmall) speed *= 0.35;
        el.style.transform = 'translate3d(0,' + (y * speed).toFixed(2) + 'px,0)';
      });
      ticking = false;
    };
    window.addEventListener('scroll', function () {
      if (!ticking) { ticking = true; requestAnimationFrame(apply); }
    }, { passive: true });
    apply();
  }

  /* ---- collapsible groups: services + FAQ ---- */
  function collapsible(itemSel, btnSel, panelSel, exclusive) {
    var items = Array.prototype.slice.call(document.querySelectorAll(itemSel));
    items.forEach(function (item) {
      var btn = item.querySelector(btnSel);
      var panel = item.querySelector(panelSel);
      if (!btn || !panel) return;
      var inner = panel.firstElementChild;

      var setOpen = function (open) {
        item.setAttribute('data-open', open ? 'true' : 'false');
        btn.setAttribute('aria-expanded', open ? 'true' : 'false');
        panel.style.height = open ? inner.offsetHeight + 'px' : '0px';
      };

      btn.addEventListener('click', function () {
        var willOpen = item.getAttribute('data-open') !== 'true';
        if (exclusive && willOpen) {
          items.forEach(function (other) {
            if (other === item) return;
            other.setAttribute('data-open', 'false');
            other.querySelector(btnSel).setAttribute('aria-expanded', 'false');
            other.querySelector(panelSel).style.height = '0px';
          });
        }
        setOpen(willOpen);
      });

      setOpen(item.getAttribute('data-open') === 'true');
      window.addEventListener('resize', function () {
        if (item.getAttribute('data-open') === 'true') panel.style.height = inner.offsetHeight + 'px';
      });
    });
  }
  collapsible('.ec-svc__item', '.ec-svc__btn', '.ec-svc__panel', true);
  collapsible('.ec-faq__item', '.ec-faq__q', '.ec-faq__a', false);

  /* ---- problem -> solution switcher ---- */
  var probBtns = Array.prototype.slice.call(document.querySelectorAll('.ec-prob__q'));
  var probPanel = document.querySelector('.ec-prob__panel');
  if (probBtns.length && probPanel) {
    var title = probPanel.querySelector('h3');
    var body = probPanel.querySelector('p');
    var select = function (btn) {
      probBtns.forEach(function (b) { b.setAttribute('aria-selected', b === btn ? 'true' : 'false'); });
      title.textContent = btn.getAttribute('data-answer-title');
      body.textContent = btn.getAttribute('data-answer-body');
    };
    probBtns.forEach(function (btn) { btn.addEventListener('click', function () { select(btn); }); });
    select(probBtns[0]);
  }

  /* ---- marquee: duplicate track for seamless loop ---- */
  var track = document.querySelector('.ec-marquee__track');
  if (track && !reduced) track.innerHTML += track.innerHTML;

  /* ---- contact form: jump to result / preserve anchor ---- */
  var alertBox = document.querySelector('[data-scroll-to]');
  if (alertBox) alertBox.scrollIntoView({ behavior: reduced ? 'auto' : 'smooth', block: 'center' });
})();
