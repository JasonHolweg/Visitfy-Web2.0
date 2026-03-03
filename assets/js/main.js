/**
 * Visitfy Web2.0 – Main JS
 * Nav scroll effect, mobile nav, fade-up observer, FAQ accordion, contact form.
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {

    /* ── Scrolled nav ───────────────────────────────────── */
    var nav = document.querySelector('.site-nav');
    if (nav) {
      window.addEventListener('scroll', function () {
        nav.classList.toggle('scrolled', window.scrollY > 40);
      }, { passive: true });
    }

    /* ── Mobile nav toggle ──────────────────────────────── */
    var toggle    = document.getElementById('nav-toggle');
    var mobileNav = document.getElementById('nav-mobile');
    if (toggle && mobileNav) {
      toggle.addEventListener('click', function () {
        mobileNav.classList.toggle('open');
        toggle.setAttribute('aria-expanded', mobileNav.classList.contains('open'));
      });
      document.addEventListener('click', function (e) {
        if (nav && !nav.contains(e.target)) mobileNav.classList.remove('open');
      });
    }

    /* ── Active nav link ────────────────────────────────── */
    var path = window.location.pathname;
    document.querySelectorAll('.nav-links a, .nav-mobile a').forEach(function (a) {
      var href = a.getAttribute('href') || '';
      if (href && path.endsWith(href.replace(/^\.\.\//, '').replace(/^\.\//, ''))) {
        a.classList.add('active');
      }
    });

    /* ── Fade-ups for non-intro pages ───────────────────── */
    if (!document.getElementById('intro')) {
      initFadeUps();
    }

    /* ── FAQ accordion ──────────────────────────────────── */
    document.querySelectorAll('.faq-question').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var item = btn.closest('.faq-item');
        if (!item) return;
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(function (i) { i.classList.remove('open'); });
        if (!isOpen) item.classList.add('open');
      });
    });

    /* ── Contact form ───────────────────────────────────── */
    var form = document.getElementById('contact-form');
    if (form) {
      form.addEventListener('submit', function (e) {
        e.preventDefault();
        handleContact(form);
      });
    }

  });

  function initFadeUps() {
    var items = document.querySelectorAll('.fade-up');
    if (!items.length) return;
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    items.forEach(function (el) { io.observe(el); });
  }

  function handleContact(form) {
    var statusEl  = document.getElementById('form-status');
    var submitBtn = form.querySelector('button[type="submit"]');
    var nameEl    = form.querySelector('[name="name"]');
    var emailEl   = form.querySelector('[name="email"]');
    var msgEl     = form.querySelector('[name="message"]');

    var data = {
      name:    nameEl    ? nameEl.value.trim()    : '',
      email:   emailEl   ? emailEl.value.trim()   : '',
      message: msgEl     ? msgEl.value.trim()     : '',
    };

    if (!data.name || !data.email || !data.message) {
      showStatus(statusEl, 'error', 'Bitte fülle alle Pflichtfelder aus.');
      return;
    }
    if (!isValidEmail(data.email)) {
      showStatus(statusEl, 'error', 'Bitte gib eine gültige E-Mail-Adresse ein.');
      return;
    }

    var originalBtnText = submitBtn ? submitBtn.textContent : '';
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.textContent = 'Wird gesendet…';
    }

    fetch('send_mail.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(data),
    })
      .then(function (res) { return res.json(); })
      .then(function (json) {
        if (json.ok) {
          showStatus(statusEl, 'success', '✓ Nachricht gesendet! Wir melden uns bald.');
          form.reset();
        } else {
          throw new Error(json.error || 'Fehler');
        }
      })
      .catch(function () {
        showStatus(statusEl, 'error', 'Fehler beim Senden. Bitte schreib direkt an info@visitfy.de.');
      })
      .finally(function () {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.textContent = originalBtnText;
        }
      });
  }

  function showStatus(el, type, msg) {
    if (!el) return;
    el.className = 'form-status ' + type;
    el.textContent = msg;
    setTimeout(function () { el.className = 'form-status'; }, 6000);
  }

  function isValidEmail(v) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
  }

})();
