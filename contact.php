<?php
$lang = $_GET['lang'] ?? 'nl';

if ($lang == 'en') {
    $text = include __DIR__ . '/langEn.php';
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
    <div class="logo">
        <img src="logo.png" alt="Logo">
    </div>

    <nav>
        <ul>
            <li><a href="index.php"><?php echo $text['home']; ?></a></li>
            <li><a href="#"><?php echo $text['tarieven']; ?></a></li>
            <li><a href="contact.php" class="active"><?php echo $text['contact']; ?></a></li>
            <li><a href="#"><?php echo $text['over_ons']; ?></a></li>
            <li><a href="#"><?php echo $text['openingstijden']; ?></a></li>
            <li><a href="#"><?php echo $text['sponsor']; ?></a></li>
        </ul>
    </nav>

    <div class="lang-switch">
        <a href="?lang=nl">NL</a> | 
        <a href="?lang=en">EN</a>
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
        <h2><?php echo $text['contactgegevens']; ?></h2>

        <p><strong>Delta Sportfysiotherapie</strong></p>
        <p>Deltageul 22, 3251NG Stellendam</p>

        <p>
            <strong><?php echo $text['telefoon']; ?>:</strong>
            <a href="tel:0187490973">0187 490 973</a>
        </p>

        <p>
            <strong><?php echo $text['email']; ?>:</strong>
            <a href="mailto:info@deltafysio.nl">info@deltafysio.nl</a>
        </p>

        <div class="buttons">
            <a class="btn call" href="tel:0187490973">
                <?php echo $text['bel_ons']; ?>
            </a>

            <a class="btn route"
               href="https://www.google.com/maps/dir/?api=1&destination=Deltageul+22+3251NG+Stellendam"
               target="_blank">
               <?php echo $text['route']; ?>
            </a>
        </div>
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
    </div>

</section>

</body>
</html>