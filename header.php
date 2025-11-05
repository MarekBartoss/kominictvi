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
  
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="assets/images/logoKominictviNoBcgrd.png" type="image/x-icon">
</head>
<body>
<header>
  <div class="header-left">
    <a href="index.php" class="logo-link">
      <img src="assets/images/logoKominictviWhite.png" alt="Logo" class="logo-icon"> KOMINICTVÍ PALKANIN - BARTOŠ
    </a>
  </div>

  <nav>
    <ul>
      <li><a href="index.php">Úvod</a></li>
      <li><a href="services.php">Služby</a></li>
      <li><a href="references.php">Reference</a></li>
      <li><a href="gallery.php">Galerie</a></li>
      <li><a href="about.php">O nás</a></li>
      <li><a href="contact.php">Kontakt</a></li>
    </ul>
  </nav>

    <button class="hamburger" aria-label="Toggle menu">
      <span></span>
      <span></span>
      <span></span>
    </button>

</header>

<script>
  const hamburger = document.querySelector('.hamburger');
  const nav = document.querySelector('nav');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    nav.classList.toggle('active');
  });
</script>


