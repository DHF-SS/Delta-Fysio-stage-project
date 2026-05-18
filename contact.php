<?php
$lang = $_GET['lang'] ?? 'nl';

if ($lang == 'en') {
    $text = include __DIR__ . '/langEn.php';
} elseif ($lang == 'de') {
    $text = include __DIR__ . '/langDeu.php';
} else {
    $text = include __DIR__ . '/langnl.php';
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Delta Sportfysiotherapie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>
    <div class="line2"></div>
    <div class="line"></div>
  <div class="navbar-bg">
    <div class="navbar">
      
      <a class="logo" href="home.php">
        <img src="logo.png" alt="Logo">
      </a>

      <nav>
        <ul>
          <li><a href="home.php"><?php echo $text['home']; ?></a></li>
          <li><a href="#"><?php echo $text['tarieven']; ?></a></li>
          <li><a href="contact.php" class="active"><?php echo $text['contact']; ?></a></li>
          <li><a href="#"><?php echo $text['over_ons']; ?></a></li>
          <li><a href="#"><?php echo $text['sponsor']; ?></a></li>
        </ul>
      </nav>

      <div class="lang-switch">
        <a href="?lang=nl">NL</a> | 
        <a href="?lang=en">EN</a> | 
        <a href="?lang=de">DE</a>
      </div>

    </div>
  </div>
  <div class="text">
  <h2>Welkom bij Delta Sportfysio</h2>
    <h1> Samen is beter</h1>
      <button class="btn-primary">
        <a href="home.php">Gesprek Boeken</a>
      </button>
</div>
</header>



<section class="hero">
    <div class="hero-overlay">
        <h1><?php echo $text['title']; ?></h1>
        <p><?php echo $text['subtitle']; ?></p>
    </div>
</section>

<section class="contact-section">

    <div class="contact-card">
        
        
        <h2><?php echo $text['Neem Contact met ons op']; ?></h2>

        

        <p>
            <strong><?php echo $text['telefoon']; ?>:</strong><br>
            <a href="tel:0187490973">0187 490 973</a>
        </p>

        <p>
            <strong><?php echo $text['email']; ?>:</strong><br>
            <a href="mailto:info@deltafysio.nl">info@deltafysio.nl</a>
        </p>

        <p>
            <strong><?php echo $text['Openings Tijden:']; ?>:</strong><br>
            <ul class="openingstijden">
    <li>
        <span><?php echo $text['Maandag']; ?></span>
        <span>09:00 - 17:00</span>
    </li>

    <li>
        <span><?php echo $text['Dinsdag']; ?></span>
        <span>09:00 - 17:00</span>
    </li>

    <li>
        <span><?php echo $text['Woensdag']; ?></span>
        <span>09:00 - 17:00</span>
    </li>

    <li>
        <span><?php echo $text['Donderdag']; ?></span>
        <span>09:00 - 17:00</span>
    </li>

    <li>
        <span><?php echo $text['Vrijdag']; ?></span>
        <span>09:00 - 17:00</span>
    </li>

    <li>
        <span><?php echo $text['Zaterdag']; ?></span>
        <span>09:00 - 17:00</span>
    </li>

    <li>
        <span><?php echo $text['Zondag']; ?></span>
        <span>09:00 - 17:00</span>
    </li>

</ul>
        </p>


        
    </div>

    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps?q=Deltageul+22+3251NG+Stellendam&output=embed"
            width="100%" 
            height="350" 
            style="border:0;" 
            allowfullscreen 
            loading="lazy">
        </iframe>
        

        <div class="buttons">
            <p>Deltageul 22, 3251NG Stellendam</p>
            <a class="btn call"
               href="https://www.google.com/maps/dir/?api=1&destination=Deltageul+22+3251NG+Stellendam"
               target="_blank">
               <?php echo $text['route']; ?>
            </a>
        </div>
    </div>

</section>
<footer class="footer1">
    <p>© 2026 My Website</p>
  </footer>
</body>
</html>