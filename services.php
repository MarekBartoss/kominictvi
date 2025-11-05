<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Služby KOMINICTVÍ PALKANIN - BARTOŠ s.r.o. – odborná montáž komínů, revize, vložkování, čištění a autorizovaná měření.">
<meta name="keywords" content="stavba komínů, revize spalinových cest, čištění, vložkování, pasporty komínů, kominík Praha">
<meta name="author" content="KOMINICTVÍ PALKANIN - BARTOŠ s.r.o.">
<title>Služby | KOMINICTVÍ PALKANIN - BARTOŠ s.r.o.</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="icon" href="assets/images/logoKominictviNoBcgrd.png" type="image/x-icon">
</head>
<body>

<?php include 'header.php'; ?>

<main>
<section class="services-page">



<h1>Naše služby</h1>

<div class="service-list">

<div class="service-card" data-description="Výstavba třísložkových (vícevrstvých) komínových systémů dle platných norem a technických požadavků."><h2>Stavba vícevrstvých komínů</h2></div>

<div class="service-card" data-description="Odborná montáž komínových vložek pro zvýšení bezpečnosti a účinnosti odvodu spalin."><h2>Vložkování komínů</h2></div>

<div class="service-card" data-description="Bezpečné a certifikované připojení krbů, kotlů a dalších spalovacích zařízení na komín."><h2>Připojování spotřebičů</h2></div>

<div class="service-card" data-description="Provádíme kontroly a čištění dle nařízení vlády č. 91/2010 Sb., včetně vystavení revizní zprávy."><h2>Revize spalinových cest</h2></div>

<div class="service-card" data-description="Pravidelné čištění komínů pro zajištění bezpečného provozu a prevence požárů."><h2>Kontrola a čištění spalinových cest</h2></div>

<div class="service-card" data-description="Profesionální měření pro malé zdroje tepla do 200 kW – s vystavením zprávy pro úřady."><h2>Měření účinnosti spalování</h2></div>

<div class="service-card" data-description="Odborná dokumentace a posouzení stavu komínových a spalinových cest."><h2>Technické posudky</h2></div>

<div class="service-card" data-description="Zmapování všech komínových těles, včetně dokumentace pro projekt nebo správu objektu."><h2>Pasportizace komínů</h2></div>

<div class="service-card" data-description="Inspekce komínů průmyslovou kamerou – ideální pro zjištění závad nebo ověření průchodnosti."><h2>Prohlídky kamerou</h2></div>

<div class="service-card" data-description="Zajistíme frézování stávajících komínů pro zvětšení průměru nebo přípravu na vložkování."><h2>Frézování komínů</h2></div>

<div class="service-card" data-description="Navrhneme a spočítáme optimální parametry pro nové i rekonstruované spalinové systémy."><h2>Výpočty spalinových cest</h2></div>

</div>
</section>

<!-- Modal -->
<div id="modal" class="modal hidden">
  <div class="modal-content">
    <h2 id="modal-title"></h2>
    <p id="modal-desc"></p>
    <button id="modal-close">Zavřít</button>
  </div>
</div>

</main>

<?php include 'footer.php'; ?>

<script>
const modal = document.getElementById('modal');
const modalTitle = document.getElementById('modal-title');
const modalDesc = document.getElementById('modal-desc');
const modalClose = document.getElementById('modal-close');

document.querySelectorAll('.service-card').forEach(card => {
  card.addEventListener('click', () => {
    modalTitle.textContent = card.querySelector('h2').textContent;
    modalDesc.textContent = card.dataset.description;
    modal.classList.remove('hidden');
    modal.classList.add('fade-in');
    setTimeout(() => modal.classList.remove('fade-in'), 300);
  });
});

modalClose.addEventListener('click', () => {
  modal.classList.add('fade-out');
  setTimeout(() => {
    modal.classList.add('hidden');
    modal.classList.remove('fade-out');
  }, 300);
});


</script>

</body>
</html>
