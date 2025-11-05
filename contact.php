<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Kontakt – KOMINICTVÍ PALKANIN - BARTOŠ s.r.o.. Adresa, telefon, e-mail a úřední hodiny.">
  <meta name="keywords" content="kontakt kominík, kominictví Praha 7, Schnirchova, telefon, e-mail, IČO">
  <meta name="author" content="KOMINICTVÍ PALKANIN - BARTOŠ s.r.o.">
  <title>Kontakt | KOMINICTVÍ PALKANIN - BARTOŠ s.r.o.</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/animations.css"> <!-- PŘIDÁNO -->
  <link rel="icon" href="assets/images/logoKominictviNoBcgrd.png" type="image/x-icon">
</head>
<body>

<?php include 'header.php'; ?>

<main>
  <section class="contact-page">
    <!-- Přidána animace -->
    <h1 class="animate-on-load anim-fade-in-down anim-delay-100">Kontakt</h1>

    <!-- Přidána animace na celý grid -->
    <div class="contact-grid animate-on-load anim-fade-in-up anim-delay-300">
      <div class="contact-info">
        <p><strong>KOMINICTVÍ PALKANIN – BARTOŠ s.r.o.</strong></p>
        <p>Schnirchova 28, 170 00 Praha 7</p>

        <!-- OPRAVA: Přidány tel: odkazy -->
        <p><strong>Tel./Fax:</strong> <a href="tel:+420220801773">220 801 773</a><br>
        <strong>Mobil:</strong> <a href="tel:+420728819270">728 819 270</a><br>
        <strong>Email:</strong> <a href="mailto:kominictvipalkanin@seznam.cz">kominictvipalkanin@seznam.cz</a></p>

        <p><strong>IČO:</strong> 27134351<br>
        <strong>DIČ:</strong> CZ27134351</p>

        <p><strong>Úřední hodiny kanceláře:</strong><br>
        Po–Čt: 7.00–14.00</p>

        <p><strong>Členství:</strong><br>
        Člen Společenstva kominíků ČR<br>
        Člen Jednoty kominíků v Praze</p>

        <p>Firma je zapsaná v Obchodním rejstříku vedeného Městským soudem v Praze,<br>
         oddíl C, vložka 98843.</p>
      </div>

      <div class="contact-map">
        <iframe
          src="https://www.google.com/maps?q=Schnirchova+1374/28,+170+00+Praha+7-Holešovice&output=embed"
          width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
</main>


<?php include 'footer.php'; ?>
</body>
</html>