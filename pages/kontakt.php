<?php
$root      = '../';
$pageTitle = 'Kontakt | Visitfy – 360° Rundgänge anfragen';
$pageDesc  = 'Jetzt Ihr 360°-Projekt anfragen. Wir melden uns mit einem konkreten Angebot und klarem Fahrplan.';
include '../includes/header.php';
?>

<section class="page-hero section">
  <div class="orb" style="width:400px;height:400px;top:-80px;right:-100px;background:radial-gradient(circle,rgba(78,205,196,0.2),transparent 70%)"></div>
  <div class="container">
    <p class="section-label">Kontakt</p>
    <h1>Jetzt <span class="grad-text">anfragen</span></h1>
    <p>Schreib uns – wir antworten persönlich und erstellen dir ein unverbindliches Angebot.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="contact-grid">

      <div class="contact-info fade-up">
        <h3>So erreichst du uns</h3>

        <div class="contact-item">
          <div class="contact-icon">📧</div>
          <div class="contact-item-text">
            <strong>E-Mail</strong>
            <a href="mailto:info@visitfy.de">info@visitfy.de</a>
          </div>
        </div>

        <div class="contact-item">
          <div class="contact-icon">📍</div>
          <div class="contact-item-text">
            <strong>Standort</strong>
            <span>Deutschland</span>
          </div>
        </div>

        <div class="contact-item">
          <div class="contact-icon">⏱</div>
          <div class="contact-item-text">
            <strong>Antwortzeit</strong>
            <span>In der Regel innerhalb von 48 Stunden</span>
          </div>
        </div>

        <div class="contact-item">
          <div class="contact-icon">📸</div>
          <div class="contact-item-text">
            <strong>Instagram</strong>
            <a href="https://www.instagram.com/visitfy.de/" target="_blank" rel="noopener">@visitfy.de</a>
          </div>
        </div>
      </div>

      <form class="contact-form glass fade-up fade-up-d1" id="contact-form" novalidate>
        <div class="form-row">
          <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" id="name" name="name" placeholder="Dein Name" required>
          </div>
          <div class="form-group">
            <label for="email">E-Mail *</label>
            <input type="email" id="email" name="email" placeholder="deine@mail.de" required>
          </div>
        </div>

        <div class="form-group">
          <label for="business">Dein Unternehmen / Branche</label>
          <input type="text" id="business" name="business" placeholder="z.B. Restaurant in Hamburg">
        </div>

        <div class="form-group">
          <label for="message">Nachricht *</label>
          <textarea id="message" name="message" placeholder="Was kann Visitfy für dich tun?" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Nachricht senden →</button>
        <div id="form-status" class="form-status" role="alert"></div>
      </form>

    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
