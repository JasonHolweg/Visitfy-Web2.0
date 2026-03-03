<?php
$root      = '../';
$pageTitle = 'Über uns | Visitfy – Team & Mission';
$pageDesc  = 'Lerne Visitfy kennen: Wer wir sind, was uns antreibt und warum 360°-Rundgänge der nächste Schritt für dein Unternehmen sind.';
include '../includes/header.php';
?>

<section class="page-hero section">
  <div class="orb" style="width:400px;height:400px;top:-80px;left:-100px;background:radial-gradient(circle,rgba(168,85,247,0.2),transparent 70%)"></div>
  <div class="container">
    <p class="section-label">Über uns</p>
    <h1>Die Menschen hinter <span class="grad-text">Visitfy</span></h1>
    <p>Wir verbinden modernste 360°-Technologie mit dem Verständnis für die Bedürfnisse lokaler Unternehmen.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="about-intro fade-up">
      <div class="about-visual">360°</div>
      <div class="about-text">
        <h2>Unsere Mission</h2>
        <p>
          Visitfy wurde gegründet mit einem klaren Ziel: Lokale Unternehmen sollen im digitalen Raum
          genauso beeindruckend wirken wie in der Realität.
        </p>
        <p>
          Mit professionellen 360°-Rundgängen helfen wir Restaurants, Hotels, Immobilien und Praxen dabei,
          Vertrauen aufzubauen – noch bevor der erste persönliche Kontakt stattfindet.
        </p>
        <p>
          Weniger Buzzwords, mehr Ergebnisse: Visitfy produziert Rundgänge, die messbar mehr
          Sichtbarkeit, mehr Vertrauen und mehr qualifizierte Anfragen erzeugen.
        </p>
        <a href="kontakt.php" class="btn btn-primary" style="margin-top:16px;">Jetzt Gespräch vereinbaren →</a>
      </div>
    </div>

    <!-- Team -->
    <p class="section-label fade-up" style="margin-top:60px">Das Team</p>
    <h2 class="section-title fade-up fade-up-d1">Menschen mit <span>Leidenschaft</span></h2>

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

<!-- CTA -->
<section class="cta-section" aria-labelledby="about-cta">
  <div class="orb" style="width:500px;height:500px;top:50%;left:50%;transform:translate(-50%,-50%);background:radial-gradient(circle,rgba(168,85,247,0.15),transparent 70%)"></div>
  <div class="container" style="position:relative;z-index:1">
    <h2 class="fade-up" id="about-cta">Bereit loszulegen?</h2>
    <p class="fade-up fade-up-d1">Kontaktiere uns für ein kostenloses und unverbindliches Erstgespräch.</p>
    <a href="kontakt.php" class="btn btn-primary fade-up fade-up-d2">Jetzt Kontakt aufnehmen →</a>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
