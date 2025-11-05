<!DOCTYPE html>
<html lang="cs">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Fotogalerie – ukázky práce KOMINICTVÍ PALKANIN - BARTOŠ s.r.o..">
<meta name="keywords" content="kominictví reference, kominík ukázky, fotogalerie komínů">
<meta name="author" content="KOMINICTVÍ PALKANIN - BARTOŠ s.r.o.">
<title>Fotogalerie | KOMINICTVÍ PALKANIN - BARTOŠ s.r.o.</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/gallery.css"> <!-- Tento soubor také aktualizuj! -->
<link rel="stylesheet" href="css/animations.css">
<link rel="icon" href="assets/images/logoKominictviNoBcgrd.png" type="image/x-icon">
</head>

<body>

<?php include 'header.php'; ?>

<main>
<section class="gallery-page">
  <!-- Nadpis a taby zůstávají, animace také -->
  <h1 class="animate-on-load anim-fade-in-down anim-delay-100">Fotogalerie</h1>

  <div class="tabs animate-on-load anim-fade-in-down anim-delay-200" style="font-family: Poppins, sans-serif;">
    <button class="tab active" data-tab="work">Ukázka Práce</button>
    <button class="tab" data-tab="firm">Firma</button>
  </div>

  <!-- 
    OPRAVA: Animace se vrátila sem, na celý kontejner mřížky.
    Načte se jako jeden elegantní blok.
  -->
  <div id="thumbs" class="gallery-grid animate-on-load anim-fade-in-up anim-delay-400">
    <!-- Obrázky sem dynamicky vloží JavaScript -->
  </div>
  
</section>
</main>

<?php include 'footer.php'; ?>


<!-- 
  NOVÝ LIGHTBOX MODAL
-->
<div id="lightbox-modal" class="lightbox-modal hidden">
  <button id="lightbox-close" class="lightbox-close" aria-label="Zavřít">&times;</button>
  <button id="lightbox-prev" class="lightbox-arrow left" aria-label="Předchozí">&#10094;</button>
  <div class="lightbox-content">
    <img id="lightbox-image" class="lightbox-image" src="" alt="Ukázka práce" />
    <div id="lightbox-caption" class="lightbox-caption"></div>
  </div>
  <button id="lightbox-next" class="lightbox-arrow right" aria-label="Další">&#10095;</button>
</div>


<script>
  // Data obrázků (názvy jsou pro popisky v lightboxu)
  const sets = {
    work: [
      { src: "assets/images/1b.jpg", alt: "Společenstvo kominíků" },
      { src: "assets/images/2b.jpg", alt: "Komín na střeše" },
      { src: "assets/images/3b.jpg", alt: "Nerezový komín na fasádě" },
      { src: "assets/images/4b.jpg", alt: "Fasádní komín" }
    ],
    firm: [
      { src: "assets/images/5b.jpg", alt: "Stavba komínu" },
      { src: "assets/images/6b.jpg", alt: "Setkání s politiky" },
      { src: "assets/images/7b.jpg", alt: "Pamětní list" },
      { src: "assets/images/8b.jpg", alt: "Kominík na střeše Pražského hradu" }
    ]
  };

  let currentTab = "work";
  let currentIndex = 0;

  // Elementy stránky
  const thumbsEl = document.getElementById("thumbs");
  const tabs = document.querySelectorAll(".tabs .tab");

  // Elementy Lightboxu
  const modal = document.getElementById("lightbox-modal");
  const modalImg = document.getElementById("lightbox-image");
  const modalCaption = document.getElementById("lightbox-caption");
  const modalClose = document.getElementById("lightbox-close");
  const modalPrev = document.getElementById("lightbox-prev");
  const modalNext = document.getElementById("lightbox-next");

  // Funkce pro vykreslení mřížky náhledů
  function renderThumbs() {
    thumbsEl.innerHTML = ""; // Vyčistí mřížku
    sets[currentTab].forEach((imgData, index) => {
      const img = document.createElement("img");
      img.src = imgData.src;
      img.alt = imgData.alt;
      
      // Přidá click listener pro otevření lightboxu
      img.addEventListener("click", () => {
        openLightbox(index);
      });

      // OPRAVA: Odstraněna animace z jednotlivých obrázků
      // img.classList.add('animate-on-load', 'anim-fade-in-up');
      // img.style.animationDelay = `${delay}ms`; 
      
      thumbsEl.appendChild(img);
    });
  }

  // Funkce pro otevření lightboxu na konkrétním indexu
  function openLightbox(index) {
    currentIndex = index;
    updateLightboxImage();
    modal.classList.remove("hidden");
    document.body.classList.add("lightbox-open"); // Zabrání skrolování stránky
  }

  // Funkce pro zavření lightboxu
  function closeLightbox() {
    modal.classList.add("hidden");
    document.body.classList.remove("lightbox-open");
  }

  // Funkce pro aktualizaci obrázku a popisku v lightboxu
  function updateLightboxImage() {
    const imgData = sets[currentTab][currentIndex];
    modalImg.src = imgData.src;
    modalCaption.textContent = imgData.alt;
  }

  // Funkce pro zobrazení dalšího obrázku
  function showNext() {
    const arrLength = sets[currentTab].length;
    currentIndex = (currentIndex + 1) % arrLength; // % zařídí zacyklení
    updateLightboxImage();
  }

  // Funkce pro zobrazení předchozího obrázku
  function showPrev() {
    const arrLength = sets[currentTab].length;
    currentIndex = (currentIndex - 1 + arrLength) % arrLength; // % zařídí zacyklení
    updateLightboxImage();
  }

  // Funkce pro přepnutí tabu
  function switchTab(tabKey) {
    if (tabKey === currentTab) return;
    currentTab = tabKey;
    
    // Aktualizuje aktivní třídu na tabech
    tabs.forEach(btn => {
      btn.classList.toggle("active", btn.dataset.tab === tabKey);
    });
    
    renderThumbs(); // Překreslí mřížku pro nový tab
  }

  // --- Přiřazení Event Listenerů ---

  // Taby
  tabs.forEach(btn => {
    btn.addEventListener("click", () => switchTab(btn.dataset.tab));
  });

  // Lightbox - zavření
  modalClose.addEventListener("click", closeLightbox);
  // Zavření kliknutím na pozadí (mimo obrázek)
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      closeLightbox();
    }
  });

  // Lightbox - šipky
  modalNext.addEventListener("click", showNext);
  modalPrev.addEventListener("click", showPrev);

  // Ovládání klávesnicí
  document.addEventListener("keydown", (e) => {
    if (modal.classList.contains("hidden")) return; // Nic nedělat, pokud je lightbox zavřený

    if (e.key === "ArrowRight") {
      showNext();
    } else if (e.key === "ArrowLeft") {
      showPrev();
    } else if (e.key === "Escape") {
      closeLightbox();
    }
  });

  // První spuštění
  renderThumbs();

</script>

</body>
</html>