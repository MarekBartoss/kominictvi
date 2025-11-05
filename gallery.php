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
<link rel="stylesheet" href="style.css">
<link rel="icon" href="assets/images/logoKominictviNoBcgrd.png" type="image/x-icon">
</head>

<body>

<?php include 'header.php'; ?>

<main><section class="gallery-page">
  <h1>Fotogalerie</h1>

  <!-- TABS -->
  <div class="tabs" style="font-family: Poppins, sans-serif;">
    <button class="tab active" data-tab="work">Ukázka Práce</button>
    <button class="tab" data-tab="firm">Firma</button>
  </div>

  <!-- DESKTOP GALLERY -->
  <div class="gallery-container">
    <button class="arrow left" onclick="prevImage()">&#10094;</button>
    <img id="mainImage" src="assets/images/1b.jpg" alt="Ukázka práce" onclick="toggleFull()" />
    <button class="arrow right" onclick="nextImage()">&#10095;</button>
  </div>

  <!-- MOBILE GALLERY LIST (auto-fills by JS for the active tab) -->
  <div id="thumbs" class="gallery-list"></div>
</section>

<script>
  // Two tabs → two image sets
  const sets = {
    work: [
      "assets/images/1b.jpg",
      "assets/images/2b.jpg",
      "assets/images/3b.jpg",
      "assets/images/4b.jpg",
    ],
    firm: [
      "assets/images/5b.jpg",
      "assets/images/6b.jpg",
      "assets/images/7b.jpg",
      "assets/images/8b.jpg",
    ],
  };

  let currentTab = "work";
  let currentIndex = 0;

  const mainImage = document.getElementById("mainImage");
  const thumbsEl = document.getElementById("thumbs");

  function renderThumbs() {
    thumbsEl.innerHTML = "";
    sets[currentTab].forEach((src, i) => {
      const img = document.createElement("img");
      img.src = src;
      img.alt = currentTab === "work" ? "Ukázka práce" : "Firma";
      img.addEventListener("click", () => {
        currentIndex = i;
        updateImage();
        scrollToTopDesktop();
      });
      thumbsEl.appendChild(img);
    });
  }

  function updateImage() {
    mainImage.src = sets[currentTab][currentIndex];
  }

  function nextImage() {
    const arr = sets[currentTab];
    currentIndex = (currentIndex + 1) % arr.length;
    updateImage();
  }

  function prevImage() {
    const arr = sets[currentTab];
    currentIndex = (currentIndex - 1 + arr.length) % arr.length;
    updateImage();
  }

  function toggleFull() {
    const container = document.querySelector(".gallery-container");
    mainImage.classList.toggle("fullscreen");
    container.classList.toggle("fullscreen");
  }

  function switchTab(tabKey) {
    if (tabKey === currentTab) return;
    currentTab = tabKey;
    currentIndex = 0;
    updateImage();
    renderThumbs();
    // Toggle active class on tabs
    document.querySelectorAll(".tabs .tab").forEach(btn => {
      btn.classList.toggle("active", btn.dataset.tab === tabKey);
    });
  }

  function scrollToTopDesktop() {
    // keep behavior simple; optional smooth scroll to main image on mobile
    mainImage.scrollIntoView({ behavior: "smooth", block: "center" });
  }

  // Tab button wiring
  document.querySelectorAll(".tabs .tab").forEach(btn => {
    btn.addEventListener("click", () => switchTab(btn.dataset.tab));
  });

  // Initial render
  renderThumbs();
  updateImage();

  // expose arrow handlers (they’re called inline in HTML)
  window.nextImage = nextImage;
  window.prevImage = prevImage;
  window.toggleFull = toggleFull;
</script>
