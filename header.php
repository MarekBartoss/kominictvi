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
  
  <link rel="stylesheet" href="css/style.css"> 
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
    <!-- NOVÉ LOGO PRO MOBILNÍ MENU -->
    <a href="index.php" class="nav-mobile-logo">
      <img src="assets/images/logoKominictviWhite.png" alt="Logo Kominictví">
    </a>
    
    <ul>
      <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Úvod</a></li>
      <li><a href="services.php" class="<?= ($currentPage == 'services.php') ? 'active' : '' ?>">Služby</a></li>
      <li><a href="references.php" class="<?= ($currentPage == 'references.php') ? 'active' : '' ?>">Reference</a></li>
      <li><a href="gallery.php" class="<?= ($currentPage == 'gallery.php') ? 'active' : '' ?>">Galerie</a></li>
      <li><a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">O nás</a></li>
      <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Kontakt</a></li>
      
      <!-- NOVÝ ELEMENT PRO POSUVNOU ČÁRU -->
      <span class="nav-underline"></span>
    </ul>
  </nav>

</header>

<script>
  // Původní skript pro hamburger
  const hamburger = document.querySelector('.hamburger');
  const nav = document.querySelector('nav');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    nav.classList.toggle('active');
  });
  
  
  // NOVÝ SKRIPT PRO POSUVNOU ČÁRU
  document.addEventListener('DOMContentLoaded', () => {
    const navList = document.querySelector('nav ul');
    const navLinks = document.querySelectorAll('nav ul li a');
    const underline = document.querySelector('.nav-underline');
    const activeLink = document.querySelector('nav ul li a.active');

    // Funkce pro nastavení pozice čáry
    function setUnderlinePosition(link) {
      if (link) {
        const parentLi = link.parentElement;
        underline.style.width = `${parentLi.clientWidth}px`;
        underline.style.transform = `translateX(${parentLi.offsetLeft}px)`;
      }
    }

    // OPRAVA: Vytvoříme asynchronní funkci, která počká na fonty
    async function initializeUnderline() {
      try {
        // 1. POČKÁ, AŽ BUDOU FONTY NAČTENY
        await document.fonts.ready;

        // 2. Nastaví čáru na aktivní položku (teď už se SPRÁVNÝM fontem)
        setUnderlinePosition(activeLink);

        // 3. Přidá třídu pro animaci (s malou prodlevou pro vykreslení)
        setTimeout(() => {
          if (underline) {
            underline.classList.add('nav-underline-animated');
          }
        }, 50);

      } catch (err) {
        // Fallback, kdyby načítání fontů selhalo
        console.warn('Načítání fontů selhalo, čára se může zobrazit nepřesně.', err);
        setUnderlinePosition(activeLink);
        setTimeout(() => {
          if (underline) {
            underline.classList.add('nav-underline-animated');
          }
        }, 50);
      }
    }

    // Zavoláme novou inicializační funkci, která čeká na fonty
    initializeUnderline();

    // 3. Sleduje hover nad všemi odkazy
    navLinks.forEach(link => {
      link.parentElement.addEventListener('mouseenter', () => {
        setUnderlinePosition(link);
      });
    });

    // 4. Vrátí čáru zpět na aktivní položku, když myš opustí celé menu
    navList.addEventListener('mouseleave', () => {
      setUnderlinePosition(activeLink);
    });
    
    // 5. Přepočítá pozici při změně velikosti okna (důležité pro responzivitu)
    window.addEventListener('resize', () => {
      const currentActiveLink = document.querySelector('nav ul li a.active');
      setUnderlinePosition(currentActiveLink);
    });
  });
</script>