<?php if (!isset($root)) $root = ''; ?>
<!-- ── Footer ──────────────────────────────────────────── -->
<footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-inner">

      <div class="footer-brand">
        <a href="<?= $root ?>index.php" class="nav-logo" aria-label="Visitfy Startseite">
          <span class="nav-logo-text">Visitfy</span>
        </a>
        <p>Ihre Location. Virtuell erlebt.<br>360° Rundgänge die Vertrauen erzeugen.</p>
      </div>

      <div class="footer-links-group">
        <h4>Navigation</h4>
        <a href="<?= $root ?>index.php">Start</a>
        <a href="<?= $root ?>pages/about.php">Über uns</a>
        <a href="<?= $root ?>pages/faq.php">FAQ</a>
        <a href="<?= $root ?>pages/partner.php">Partner werden</a>
        <a href="<?= $root ?>pages/kontakt.php">Kontakt</a>
      </div>

      <div class="footer-links-group">
        <h4>Rechtliches</h4>
        <a href="<?= $root ?>pages/impressum.php">Impressum</a>
        <a href="<?= $root ?>pages/datenschutz.php">Datenschutz</a>
      </div>

      <div class="footer-links-group">
        <h4>Kontakt</h4>
        <a href="mailto:info@visitfy.de">info@visitfy.de</a>
        <a href="https://www.instagram.com/visitfy.de/" target="_blank" rel="noopener">Instagram</a>
        <a href="https://www.facebook.com/people/Visitfy/61567271012669/" target="_blank" rel="noopener">Facebook</a>
      </div>

    </div>

    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> Visitfy. Alle Rechte vorbehalten.</span>
      <span>
        <a href="<?= $root ?>pages/impressum.php">Impressum</a> ·
        <a href="<?= $root ?>pages/datenschutz.php">Datenschutz</a>
      </span>
    </div>
  </div>
</footer>

<script src="<?= $root ?>assets/js/main.js"></script>
</body>
</html>
