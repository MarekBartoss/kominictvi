<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="KOMINICTVÍ PALKANIN - BARTOŠ s.r.o. – Profesionální kominické služby v Praze. Čištění, revize, vložkování komínů.">
  <meta name="keywords" content="kominík, kominictví, revize komínu, Praha, spalinové cesty, vložkování komínu">
  <meta name="author" content="KOMINICTVÍ PALKANIN - BARTOŠ s.r.o.">
  <meta name="robots" content="index, follow">
  <title>KOMINICTVÍ PALKANIN - BARTOŠ s.r.o. | Profesionální kominické služby</title>
  
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/animations.css"> <!-- NOVÝ SOUBOR -->
  
  <link rel="icon" href="assets/images/logoKominictviNoBcgrd.png" type="image/x-icon">
  
  <!-- Ikonky (pro novou sekci) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<!-- Přidány třídy pro animaci headeru -->
<?php include 'header.php'; ?>

<main>
  <!-- Hero sekce (bez tlačítka) -->
  <section class="hero">
    <!-- Přidány třídy pro animaci -->
    <h1 class="animate-on-load anim-fade-in-down anim-delay-100">Bezpečný komín pro každého.</h1>
    <p class="animate-on-load anim-fade-in-down anim-delay-300">Nabízíme komplexní kominické služby v Praze a okolí.</p>
  </section>

  <!-- NOVÁ SEKCE: Proč si vybrat nás? -->
  <!-- Celá sekce se objeví jako jeden blok -->
  <section class="features-section animate-on-load anim-fade-in-up anim-delay-400">
    <h2 class="section-title">Proč si vybrat nás?</h2>
    <div class="features-grid">
      
      <div class="feature-card">
        <i class="fas fa-users"></i>
        <h3>Rodinná tradice</h3>
        <p>Jsme rodinná firma s tradicí a řemeslo vykonává již čtvrtá generace.</p>
      </div>
      
      <div class="feature-card">
        <i class="fas fa-award"></i>
        <h3>Odbornost a kvalita</h3>
        <p>Jsme aktivním členem Společenstva kominíků ČR a držíme se norem EU.</p>
      </div>
      
      <div class="feature-card">
        <i class="fas fa-check-circle"></i>
        <h3>Kompletní servis</h3>
        <p>Od čištění a revizí po vložkování, frézování a stavbu nových komínů.</p>
      </div>
      
    </div>
  </section>

  <section class="services-preview animate-on-load anim-fade-in-up anim-delay-500">
    <h2 class="section-title">Vybrané služby</h2>
    <div class="services-grid">
      
      <a href="services.php" class="service-preview-card">
        <h3>Revize spalinových cest</h3>
        <p>Zjistit více &rarr;</p>
      </a>
      
      <a href="services.php" class="service-preview-card">
        <h3>Vložkování komínů</h3>
        <p>Zjistit více &rarr;</P>
      </a>
      
      <a href="services.php" class="service-preview-card">
        <h3>Stavba vícevrstvých komínů</h3>
        <p>Zjistit více &rarr;</p>
      </a>
      
    </div>
  </section>

  <!-- NOVÁ SEKCE: O nás (krátce) -->
  <section class="about-preview animate-on-load anim-fade-in-up anim-delay-600">
    <h2 class="section-title">O naší firmě</h2>
    <p class="about-text">
      <strong>KOMINICTVÍ PALKANIN – BARTOŠ s.r.o.</strong> je rodinná firma s hlubokou řemeslnou tradicí. Ve firmě pracuje již čtvrtá generace. Dědové nynějších majitelů vykonávali kominické řemeslo v Maďarsku a na Slovensku už od dvacátých let minulého století.
    </p>
    <a href="about.php" class="btn">Více o nás</a>
  </section>

</main>

<?php include 'footer.php'; ?>

</body>
</html>