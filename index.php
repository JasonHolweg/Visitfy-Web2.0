<?php
$root      = '';
$pageTitle = 'Visitfy | 360° Rundgänge – Mehr Sichtbarkeit. Mehr Vertrauen. Mehr Anfragen.';
$pageDesc  = 'Visitfy erstellt hochwertige 360°-Erlebnisse für Immobilien, Gastronomie, Hotels und Praxen – modern, professionell, wirkungsvoll.';
include 'includes/header.php';
?>

<!-- ═══════════════════════════════════════════════════════════
     INTRO ANIMATION OVERLAY
═══════════════════════════════════════════════════════════ -->
<div id="intro" role="presentation" aria-hidden="true">
  <canvas id="intro-canvas"></canvas>

  <div id="intro-text">
    <img src="assets/img/visitfy-logo.svg" alt="Visitfy" class="intro-logo-mark">
    <p>360° Rundgänge die begeistern</p>
    <p class="scroll-hint">Klicken zum Fortfahren</p>
  </div>

  <button id="skip-btn" type="button">Überspringen ↓</button>
</div>

<!-- ═══════════════════════════════════════════════════════════
     MAIN CONTENT (hidden until intro completes)
═══════════════════════════════════════════════════════════ -->
<div id="main-content" style="opacity:0;">

  <!-- ── HERO ──────────────────────────────────────────────── -->
  <section class="hero section" aria-labelledby="hero-heading">
    <!-- Background orbs -->
    <div class="orb" style="width:500px;height:500px;top:-100px;left:-150px;background:radial-gradient(circle,rgba(111,169,184,0.14),transparent 72%)"></div>
    <div class="orb" style="width:400px;height:400px;bottom:50px;right:-80px;background:radial-gradient(circle,rgba(127,134,184,0.14),transparent 72%)"></div>
    <div class="orb" style="width:300px;height:300px;top:40%;left:55%;background:radial-gradient(circle,rgba(111,143,179,0.11),transparent 72%)"></div>

    <div class="container hero-content">
      <div class="hero-badge"><span class="dot"></span> 360° Rundgänge für moderne Unternehmen</div>

      <h1 id="hero-heading">
        <span class="line-1">Mehr Sichtbarkeit.</span>
        <span class="line-2">Mehr Vertrauen. Mehr Anfragen.</span>
      </h1>

      <p class="hero-sub">
        Visitfy erstellt hochwertige 360°-Erlebnisse für Immobilien, Gastronomie, Hotels und Praxen –
        professionell, immersiv und messbar wirksam.
      </p>

      <div class="hero-actions">
        <a href="pages/kontakt.php" class="btn btn-primary">Jetzt Beratung anfragen</a>
        <a href="#facts"            class="btn btn-glass">Unsere Ergebnisse</a>
      </div>
    </div>

    <div class="hero-scroll" aria-hidden="true">Scroll</div>
  </section>

  <!-- ── STATS / KPIs ───────────────────────────────────────── -->
  <section class="section" id="facts" aria-label="Zahlen & Fakten">
    <div class="container">
      <p class="section-label fade-up">Ergebnisse</p>
      <h2 class="section-title fade-up fade-up-d1">Zahlen, die <span>überzeugen</span></h2>

      <div class="stats-row">
        <div class="stat-item glass fade-up">
          <div class="stat-number">7+</div>
          <div class="stat-label">Jahre Erfahrung</div>
        </div>
        <div class="stat-item glass fade-up fade-up-d1">
          <div class="stat-number">420+</div>
          <div class="stat-label">Abgeschlossene Projekte</div>
        </div>
        <div class="stat-item glass fade-up fade-up-d2">
          <div class="stat-number">98%</div>
          <div class="stat-label">Zufriedene Kunden</div>
        </div>
        <div class="stat-item glass fade-up fade-up-d3">
          <div class="stat-number">5</div>
          <div class="stat-label">Ø Liefertage</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── FEATURES / VORTEILE ───────────────────────────────── -->
  <section class="section" aria-labelledby="features-heading">
    <div class="container">
      <p class="section-label fade-up">Warum Visitfy</p>
      <h2 class="section-title fade-up fade-up-d1" id="features-heading">
        Was ein 360° Rundgang<br><span>für dich leistet</span>
      </h2>
      <p class="section-sub fade-up fade-up-d2">
        Ein virtueller Rundgang schafft messbaren Mehrwert – vor dem ersten Besuch.
      </p>

      <div class="features-grid">
        <article class="feature-card glass fade-up fade-up-d1"
           style="--accent-grad:linear-gradient(90deg,#6fa9b8,#6f8fb3);--icon-bg:rgba(111,169,184,0.10);--icon-border:rgba(111,169,184,0.22)">
          <div class="feature-icon">🎯</div>
          <h3>Mehr Vertrauen</h3>
          <p>Transparente Einblicke erzeugen Vertrauen noch bevor der erste Kontakt stattfindet.</p>
        </article>

        <article class="feature-card glass fade-up fade-up-d2"
           style="--accent-grad:linear-gradient(90deg,#7f86b8,#8f86a8);--icon-bg:rgba(127,134,184,0.10);--icon-border:rgba(127,134,184,0.22)">
          <div class="feature-icon">📈</div>
          <h3>Mehr Anfragen</h3>
          <p>Bessere Sichtbarkeit auf Google Maps und höhere Konversion dank immersiver Erlebnisse.</p>
        </article>

        <article class="feature-card glass fade-up fade-up-d3"
           style="--accent-grad:linear-gradient(90deg,#8ea2b5,#6f8fb3);--icon-bg:rgba(142,162,181,0.10);--icon-border:rgba(142,162,181,0.22)">
          <div class="feature-icon">⚡</div>
          <h3>Schnelle Lieferung</h3>
          <p>Von der Aufnahme zum fertigen Rundgang in durchschnittlich 5 Tagen – sauber und professionell.</p>
        </article>

        <article class="feature-card glass fade-up fade-up-d4"
           style="--accent-grad:linear-gradient(90deg,#6d958f,#6fa9b8);--icon-bg:rgba(109,149,143,0.10);--icon-border:rgba(109,149,143,0.22)">
          <div class="feature-icon">🌐</div>
          <h3>Überall integrierbar</h3>
          <p>Einbindung per iFrame auf Websites, Google Maps, Social Media und Buchungsportalen.</p>
        </article>

        <article class="feature-card glass fade-up fade-up-d5"
           style="--accent-grad:linear-gradient(90deg,#6f8fb3,#7f86b8);--icon-bg:rgba(111,143,179,0.10);--icon-border:rgba(111,143,179,0.22)">
          <div class="feature-icon">📱</div>
          <h3>Mobile & VR-Ready</h3>
          <p>Optimiert für Smartphones, Tablets, Desktop – und vollständig VR-kompatibel.</p>
        </article>

        <article class="feature-card glass fade-up fade-up-d1"
           style="--accent-grad:linear-gradient(90deg,#8f86a8,#5b6d86);--icon-bg:rgba(143,134,168,0.10);--icon-border:rgba(143,134,168,0.22)">
          <div class="feature-icon">💬</div>
          <h3>Interaktive Infos</h3>
          <p>Hotspots mit Menüs, Preisen, Videos und Kontaktmöglichkeiten direkt im Rundgang.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ── DEMO TOURS ─────────────────────────────────────────── -->
  <section class="section" aria-labelledby="tours-heading">
    <div class="container">
      <p class="section-label fade-up">Live-Demo</p>
      <h2 class="section-title fade-up fade-up-d1" id="tours-heading">
        Beispiel-<span>Rundgänge</span>
      </h2>
      <p class="section-sub fade-up fade-up-d2">
        Erlebe unsere Arbeit direkt – immersiv, interaktiv und hochauflösend.
      </p>

      <div class="tour-grid">

        <article class="tour-card glass fade-up fade-up-d1">
          <p class="tour-label">Rundgang 01</p>
          <p class="tour-title">Flora Kaffee & Eisbar</p>
          <iframe
            class="tour-embed"
            src="https://my.matterport.com/show/?m=ZvsmkQVy6qB"
            title="360° Rundgang – Flora Kaffee & Eisbar"
            allow="fullscreen; xr-spatial-tracking;"
            allowfullscreen
            loading="lazy"
          ></iframe>
        </article>

        <article class="tour-card glass fade-up fade-up-d2">
          <p class="tour-label">Rundgang 02</p>
          <p class="tour-title">Danbo Flensburg</p>
          <iframe
            class="tour-embed"
            src="https://my.matterport.com/show/?m=2s8oXwSFrPC"
            title="360° Rundgang – Danbo Flensburg"
            allow="fullscreen; xr-spatial-tracking;"
            allowfullscreen
            loading="lazy"
          ></iframe>
        </article>

        <article class="tour-card glass fade-up fade-up-d3">
          <p class="tour-label">Rundgang 03</p>
          <p class="tour-title">Buddha Lounge</p>
          <iframe
            class="tour-embed"
            src="https://my.matterport.com/show/?m=1VKyHfuxX8J"
            title="360° Rundgang – Buddha Lounge"
            allow="fullscreen; xr-spatial-tracking;"
            allowfullscreen
            loading="lazy"
          ></iframe>
        </article>

      </div>
    </div>
  </section>

  <!-- ── INDUSTRIES ────────────────────────────────────────── -->
  <section class="section" aria-labelledby="industries-heading">
    <div class="container">
      <p class="section-label fade-up">Branchen</p>
      <h2 class="section-title fade-up fade-up-d1" id="industries-heading">
        Branchen, die wir<br><span>unterstützen</span>
      </h2>

      <div class="industries-grid">
        <article class="industry-card glass fade-up fade-up-d1"
                 style="--grad:linear-gradient(135deg,rgba(111,169,184,0.10),rgba(111,143,179,0.08))">
          <div class="industry-icon">🏠</div>
          <h3>Immobilien</h3>
          <p>Virtuelle Besichtigungen für schnellere Entscheidungen und höhere Anfragequalität.</p>
        </article>

        <article class="industry-card glass fade-up fade-up-d2"
                 style="--grad:linear-gradient(135deg,rgba(142,162,181,0.10),rgba(111,143,179,0.08))">
          <div class="industry-icon">🍽️</div>
          <h3>Gastronomie</h3>
          <p>Mehr Vertrauen durch transparente Einblicke in Atmosphäre und Raumgefühl.</p>
        </article>

        <article class="industry-card glass fade-up fade-up-d3"
                 style="--grad:linear-gradient(135deg,rgba(127,134,184,0.10),rgba(143,134,168,0.08))">
          <div class="industry-icon">🏨</div>
          <h3>Hotels</h3>
          <p>Bessere Buchungsentscheidungen dank realistischer Darstellung von Zimmern und Flächen.</p>
        </article>

        <article class="industry-card glass fade-up fade-up-d4"
                 style="--grad:linear-gradient(135deg,rgba(109,149,143,0.10),rgba(111,169,184,0.08))">
          <div class="industry-icon">🏥</div>
          <h3>Praxen</h3>
          <p>Professioneller erster Eindruck durch transparente Einblicke in Räume und Ausstattung.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ── PROCESS ───────────────────────────────────────────── -->
  <section class="section" aria-labelledby="process-heading">
    <div class="container">
      <p class="section-label fade-up">Ablauf</p>
      <h2 class="section-title fade-up fade-up-d1" id="process-heading">
        So läuft ein Projekt<br><span>bei uns ab</span>
      </h2>

      <div class="process-steps">
        <div class="step-card glass fade-up fade-up-d1">
          <div class="step-num">01</div>
          <h3>Briefing & Termin</h3>
          <p>Wir definieren Ziele, Umfang, Stil und den optimalen Aufnahmetag. Kostenlos und unverbindlich.</p>
        </div>
        <div class="step-card glass fade-up fade-up-d2">
          <div class="step-num">02</div>
          <h3>Aufnahme vor Ort</h3>
          <p>Professioneller Scan mit modernster Kameratechnik und saubere Nachbearbeitung.</p>
        </div>
        <div class="step-card glass fade-up fade-up-d3">
          <div class="step-num">03</div>
          <h3>Live-Schaltung</h3>
          <p>Fertiger iFrame-Code, Einbindung in Website und Google Maps – wir begleiten den Launch.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ── TESTIMONIALS ──────────────────────────────────────── -->
  <section class="section" aria-labelledby="testimonials-heading">
    <div class="container">
      <p class="section-label fade-up">Kundenstimmen</p>
      <h2 class="section-title fade-up fade-up-d1" id="testimonials-heading">
        Das sagen unsere <span>Kunden</span>
      </h2>

      <div class="testimonials-grid">
        <article class="testimonial-card glass fade-up fade-up-d1">
          <div class="stars">★★★★★</div>
          <p class="testimonial-text">
            „Die Rundgänge haben unsere Hemmschwelle komplett gesenkt. Viele Gäste trauen sich jetzt erst rein,
            weil sie den Ort vorher online schon besucht haben."
          </p>
          <div class="testimonial-author">Flora Kaffee &amp; Eisbar</div>
          <div class="testimonial-company">2 Rundgänge – 2 Standorte</div>
        </article>

        <article class="testimonial-card glass fade-up fade-up-d2">
          <div class="stars">★★★★★</div>
          <p class="testimonial-text">
            „Der Rundgang überzeugt neue Kunden schnell von unserem Inventar.
            Das hat unseren Online-Vertrieb spürbar unterstützt."
          </p>
          <div class="testimonial-author">Danbo Flensburg</div>
          <div class="testimonial-company">Digitale Möbelpräsentation</div>
        </article>

        <article class="testimonial-card glass fade-up fade-up-d3">
          <div class="stars">★★★★★</div>
          <p class="testimonial-text">
            „Der perfekte erste Eindruck für unseren Gastbereich! Gäste reservieren jetzt gezielter,
            weil sie unsere Atmosphäre bereits kennen."
          </p>
          <div class="testimonial-author">Buddha Lounge</div>
          <div class="testimonial-company">360° im Sterne-Hotel</div>
        </article>
      </div>
    </div>
  </section>

  <!-- ── TEAM ──────────────────────────────────────────────── -->
  <section class="section" aria-labelledby="team-heading">
    <div class="container">
      <p class="section-label fade-up">Menschen</p>
      <h2 class="section-title fade-up fade-up-d1" id="team-heading">
        Das Team hinter <span>Visitfy</span>
      </h2>

      <div class="team-grid">
        <article class="team-card glass fade-up fade-up-d1">
          <div class="team-avatar">🎯</div>
          <p class="team-role">Geschäftsführer</p>
          <h3>Kristian Meister</h3>
          <p>Leitet Visitfy mit Fokus auf Qualität, klare Kommunikation und messbare Ergebnisse.</p>
          <p class="team-quote">Jeder Rundgang muss Vertrauen in Sekunden erzeugen.</p>
        </article>

        <article class="team-card glass fade-up fade-up-d2">
          <div class="team-avatar">📣</div>
          <p class="team-role">Marketing &amp; Vertrieb</p>
          <h3>Fabian Meister</h3>
          <p>Verbindet Zielgruppenverständnis mit vertriebsstarken Botschaften und sauberem Lead-Funnel.</p>
          <p class="team-quote">Sichtbarkeit ist gut, qualifizierte Anfragen sind besser.</p>
        </article>

        <article class="team-card glass fade-up fade-up-d3">
          <div class="team-avatar">💻</div>
          <p class="team-role">Entwicklung</p>
          <h3>Jason Holweg</h3>
          <p>Entwickler und Inhaber von Flora Kaffee &amp; Eisbar – er verbindet Gastro-Know-how mit technischem Verständnis.</p>
          <p class="team-quote">Technik muss im Alltag von Betrieben direkt Mehrwert liefern.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ── FAQ ───────────────────────────────────────────────── -->
  <section class="section" aria-labelledby="faq-heading">
    <div class="container">
      <p class="section-label fade-up">Fragen</p>
      <h2 class="section-title fade-up fade-up-d1" id="faq-heading">
        Häufige <span>Fragen</span>
      </h2>

      <div class="faq-list">
        <div class="faq-item fade-up fade-up-d1">
          <button class="faq-question" aria-expanded="false">
            Was ist ein 360°-Rundgang und wie funktioniert er?
            <span class="faq-arrow">▼</span>
          </button>
          <div class="faq-answer">
            <p>Ein 360°-Rundgang ist eine virtuelle, interaktive Begehung Ihrer Räume. Mit hochmoderner Kameratechnik werden detailreiche Aufnahmen erstellt und zu einem nahtlosen, immersiven Erlebnis kombiniert.</p>
          </div>
        </div>

        <div class="faq-item fade-up fade-up-d2">
          <button class="faq-question" aria-expanded="false">
            Welche Vorteile bietet ein 360°-Rundgang?
            <span class="faq-arrow">▼</span>
          </button>
          <div class="faq-answer">
            <p>Stärkeres Vertrauen, höhere Professionalität, mehr Sichtbarkeit auf Google Maps, mehr qualifizierte Anfragen und interaktive Informationen wie Menüs und Preise direkt im Rundgang.</p>
          </div>
        </div>

        <div class="faq-item fade-up fade-up-d3">
          <button class="faq-question" aria-expanded="false">
            Für welche Branchen eignen sich 360°-Rundgänge?
            <span class="faq-arrow">▼</span>
          </button>
          <div class="faq-answer">
            <p>Für jede Location, die Kunden erleben sollen: Restaurants, Hotels, Praxen, Showrooms, Fitnessstudios, Immobilien, Eventlocations und viele mehr.</p>
          </div>
        </div>

        <div class="faq-item fade-up fade-up-d4">
          <button class="faq-question" aria-expanded="false">
            Was kostet ein 360°-Rundgang?
            <span class="faq-arrow">▼</span>
          </button>
          <div class="faq-answer">
            <p>Die Kosten richten sich nach Größe, Raumanzahl und gewünschtem Funktionsumfang. Für ein individuelles Angebot beraten wir Sie gerne persönlich und unverbindlich.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── CTA ───────────────────────────────────────────────── -->
  <section class="cta-section" aria-labelledby="cta-heading">
    <div class="orb" style="width:600px;height:600px;top:50%;left:50%;transform:translate(-50%,-50%);background:radial-gradient(circle,rgba(111,169,184,0.12),transparent 72%);opacity:0.55"></div>
    <div class="container" style="position:relative;z-index:1">
      <h2 class="fade-up" id="cta-heading">
        Bereit für deinen<br>
        <span class="grad-text">360° Auftritt?</span>
      </h2>
      <p class="fade-up fade-up-d1">
        Wir erstellen dir ein klares Angebot mit Zeitplan und transparenten Kosten.<br>
        Kostenlos. Unverbindlich. Persönlich.
      </p>
      <a href="pages/kontakt.php" class="btn btn-primary fade-up fade-up-d2">Jetzt Projekt starten →</a>
    </div>
  </section>

</div><!-- /#main-content -->

<?php include 'includes/footer.php'; ?>

<!-- Intro animation -->
<script src="<?= $root ?>assets/js/intro.js"></script>
