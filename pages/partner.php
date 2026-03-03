<?php
$root      = '../';
$pageTitle = 'Partner werden | Visitfy – Dein Business. Deine Stadt. Dein Erfolg.';
$pageDesc  = 'Werde offizieller Visitfy-Partner für 360°-Rundgänge. Funktionierendes System, geringes Startkapital, persönlicher Support.';
include '../includes/header.php';
?>

<section class="page-hero section">
  <div class="orb" style="width:450px;height:450px;top:-100px;right:-100px;background:radial-gradient(circle,rgba(251,191,36,0.2),transparent 70%)"></div>
  <div class="container">
    <p class="section-label">Partner werden</p>
    <h1>Dein Business.<br><span class="grad-text">Deine Stadt. Dein Erfolg.</span></h1>
    <p>Werde unser offizieller Partner für virtuelle 360°-Rundgänge und starte in deiner Stadt durch.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <p class="section-label fade-up">Warum Partner</p>
    <h2 class="section-title fade-up fade-up-d1">Was dich als Partner <span>erwartet</span></h2>
    <p class="section-sub fade-up fade-up-d2">
      Werde Teil eines funktionierenden Systems – mit persönlichem Support und klarem Fahrplan.
    </p>

    <div class="benefits-grid">
      <article class="benefit-card glass fade-up fade-up-d1">
        <h3>✅ Funktionierendes System</h3>
        <p>Wir haben's getestet. Verfeinert. Wiederholt. Was du bekommst, ist nicht neu – sondern durchdacht, schlank und wirksam.</p>
      </article>

      <article class="benefit-card glass fade-up fade-up-d2">
        <h3>💡 Geringes Startkapital</h3>
        <p>Du brauchst kein Büro, kein Lager und keine teure Ausstattung. Starte smart – mit einem klaren Plan und wenig Risiko.</p>
      </article>

      <article class="benefit-card glass fade-up fade-up-d3">
        <h3>🤝 Nicht allein. Nie.</h3>
        <p>Bei Fragen rufst du nicht irgendwo an – sondern direkt bei uns. Du bekommst echten Support, kein Ticketsystem. Persönlich. Ehrlich. Schnell.</p>
      </article>

      <article class="benefit-card glass fade-up fade-up-d4">
        <h3>📍 Deine Region</h3>
        <p>Du bist der Ansprechpartner in deiner Stadt. Lokale Präsenz, regionale Kunden – mit der Stärke eines etablierten Brands.</p>
      </article>

      <article class="benefit-card glass fade-up fade-up-d5">
        <h3>📈 Wachstum von Tag 1</h3>
        <p>Nutze unser Netzwerk, unsere Materialien und unsere Erfahrung, um schnell deine ersten Kunden zu gewinnen.</p>
      </article>

      <article class="benefit-card glass fade-up fade-up-d1">
        <h3>🎓 Training inklusive</h3>
        <p>Wir schulen dich – von Aufnahmetechnik bis Kundenpräsentation. Du startest vorbereitet, nicht planlos.</p>
      </article>
    </div>
  </div>
</section>

<section class="section" aria-labelledby="partner-form-heading">
  <div class="container">
    <div class="orb" style="width:400px;height:400px;top:50%;left:50%;transform:translate(-50%,-50%);background:radial-gradient(circle,rgba(251,191,36,0.1),transparent 70%)"></div>
    <div style="max-width:700px;margin:0 auto;position:relative;z-index:1">
      <p class="section-label fade-up">Bewerbung</p>
      <h2 class="section-title fade-up fade-up-d1" id="partner-form-heading">
        Bereit <span>durchzustarten?</span>
      </h2>
      <p class="section-sub fade-up fade-up-d2">
        Fülle jetzt das kurze Formular aus – wir melden uns persönlich bei dir.
        Unverbindlich. Ohne Risiko. Nur echtes Interesse zählt.
      </p>

      <form class="contact-form glass fade-up fade-up-d3" id="contact-form" novalidate>
        <div class="form-row">
          <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" id="name" name="name" placeholder="Dein vollständiger Name" required>
          </div>
          <div class="form-group">
            <label for="email">E-Mail *</label>
            <input type="email" id="email" name="email" placeholder="deine@mail.de" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="phone">Telefon</label>
            <input type="tel" id="phone" name="phone" placeholder="+49 000 000000">
          </div>
          <div class="form-group">
            <label for="city">Deine Stadt *</label>
            <input type="text" id="city" name="city" placeholder="z.B. Hamburg" required>
          </div>
        </div>
        <div class="form-group">
          <label for="message">Warum möchtest du Partner werden? *</label>
          <textarea id="message" name="message" placeholder="Erzähl uns kurz von dir und deiner Motivation…" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Jetzt Bewerbung abschicken →</button>
        <div id="form-status" class="form-status" role="alert"></div>
      </form>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
