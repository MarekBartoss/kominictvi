<?php
// This line gets the current file name (e.g., "index.php", "services.php")
$currentPage = basename($_SERVER['PHP_SELF']);
?>
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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="style.css"> 
  <link rel="icon" href="assets/images/logoKominictviNoBcgrd.png" type="image/x-icon">
</head>
<body>
<header>
  <div class="header-top">
    
    <!-- Div 1: Logo Pic (Left on Mobile) -->
    <div class="header-logo-pic">
      <a href="index.php">
        <img src="assets/images/logoKominictviWhite.png" alt="Logo" class="logo-icon">
      </a>
    </div>

    <!-- Div 2: Logo Text (Center on Mobile) -->
    <div class="header-logo-text">
       <a href="index.php">KOMINICTVÍ PALKANIN - BARTOŠ</a>
    </div>

    <!-- Div 3: Hamburger (Right on Mobile) -->
    <button class="hamburger" aria-label="Toggle menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>

  <nav>
    <ul>
      <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Úvod</a></li>
      <li><a href="services.php" class="<?= ($currentPage == 'services.php') ? 'active' : '' ?>">Služby</a></li>
      <li><a href="references.php" class="<?= ($currentPage == 'references.php') ? 'active' : '' ?>">Reference</a></li>
      <li><a href="gallery.php" class="<?= ($currentPage == 'gallery.php') ? 'active' : '' ?>">Galerie</a></li>
      <li><a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">O nás</a></li>
      <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Kontakt</a></li>
    </ul>
  </nav>

</header>

<script>
  // This script remains the same
  const hamburger = document.querySelector('.hamburger');
  const nav = document.querySelector('nav');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    nav.classList.toggle('active');
  });
</script>