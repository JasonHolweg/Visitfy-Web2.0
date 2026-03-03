<?php
/**
 * Visitfy Web2.0 – Shared Header / Navigation
 * Usage from root:    $root = '';  include 'includes/header.php';
 * Usage from /pages/: $root = '../'; include '../includes/header.php';
 */
if (!isset($root))      $root      = '';
if (!isset($pageTitle)) $pageTitle = 'Visitfy | 360° Rundgänge für mehr Anfragen';
if (!isset($pageDesc))  $pageDesc  = 'Visitfy erstellt hochwertige 360°-Erlebnisse für Immobilien, Gastronomie, Hotels und Praxen – modern, professionell, wirkungsvoll.';
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta property="og:title"       content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta property="og:type"        content="website">
  <title><?= htmlspecialchars($pageTitle) ?></title>

  <!-- Favicon -->
  <link rel="icon" href="<?= $root ?>assets/img/favicon.svg" type="image/svg+xml">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?= $root ?>assets/css/style.css">

  <!-- Google Fonts preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>

<!-- ── Navigation ──────────────────────────────────────── -->
<nav class="site-nav" role="navigation" aria-label="Hauptnavigation">
  <a href="<?= $root ?>index.php" class="nav-logo" aria-label="Visitfy – Startseite">
    <span class="nav-logo-text">Visitfy</span>
  </a>

  <ul class="nav-links" role="list">
    <li><a href="<?= $root ?>index.php">Start</a></li>
    <li><a href="<?= $root ?>pages/about.php">Über uns</a></li>
    <li><a href="<?= $root ?>pages/faq.php">FAQ</a></li>
    <li><a href="<?= $root ?>pages/partner.php">Partner</a></li>
    <li><a href="<?= $root ?>pages/kontakt.php">Kontakt</a></li>
  </ul>

  <a href="<?= $root ?>pages/kontakt.php" class="nav-cta">Jetzt anfragen</a>

  <button class="nav-toggle" id="nav-toggle"
          aria-label="Menü öffnen" aria-expanded="false" aria-controls="nav-mobile">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- Mobile nav -->
<nav class="nav-mobile" id="nav-mobile" role="navigation" aria-label="Mobilnavigation">
  <a href="<?= $root ?>index.php">Start</a>
  <a href="<?= $root ?>pages/about.php">Über uns</a>
  <a href="<?= $root ?>pages/faq.php">FAQ</a>
  <a href="<?= $root ?>pages/partner.php">Partner</a>
  <a href="<?= $root ?>pages/kontakt.php">Kontakt</a>
</nav>
