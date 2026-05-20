<?php
$lang = $_GET['lang'] ?? 'nl';

switch($lang){

    case 'en':
        $text = include 'langEn.php';
        break;

    case 'de':
        $text = include 'langDe.php';
        break;

    default:
        $text = include 'langnl.php';
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tarieven | Delta Sportfysiotherapie</title>

<meta name="description" content="Bekijk de tarieven voor fysiotherapie, dry needling en sportmassage bij Delta Sportfysiotherapie in Stellendam.">

<link rel="stylesheet" href="style.css">

</head>

<body>

<!-- HEADER -->
<header>

    <div class="logo">
        <img src="logo.png" alt="Delta Sportfysiotherapie logo">
    </div>

    <!-- NAVIGATION -->
    <nav>
        <ul>
            <li><a href="home.php?lang=<?php echo $lang; ?>"><?php echo $text['home']; ?></a></li>
            <li><a class="active" href="tarieven.php?lang=<?php echo $lang; ?>"><?php echo $text['tarieven']; ?></a></li>
            <li><a href="contact.php?lang=<?php echo $lang; ?>"><?php echo $text['contact']; ?></a></li>
            <li><a href="over-ons.php?lang=<?php echo $lang; ?>"><?php echo $text['over_ons']; ?></a></li>
            <li><a href="sponsor.php?lang=<?php echo $lang; ?>"><?php echo $text['sponsor']; ?></a></li>
        </ul>
    </nav>

    <!-- LANGUAGE SWITCH -->
    <div class="lang-switch">

        <a href="tarieven.php?lang=nl">NL</a> |
        <a href="tarieven.php?lang=en">EN</a> |
        <a href="tarieven.php?lang=de">DE</a>

    </div>

</header>

<!-- HERO -->
<section class="hero small-hero">

    <div class="hero-overlay">

        <h1><?php echo $text['tarieven_title'] ?? "Tarieven"; ?></h1>

        <p>Professionele zorg voor sport en herstel</p>

    </div>

</section>

<!-- PRICING -->
<section class="pricing-section">

    <div class="price-card">
        <h3>Intake</h3>
        <p class="desc">Eerste analyse van uw klachten en lichamelijke situatie.</p>
        <span>€35</span>
    </div>

    <div class="price-card">
        <h3>Sportmassage</h3>
        <p class="desc">Massage voor spierherstel, ontspanning en blessurepreventie.</p>
        <span>€45</span>
    </div>

    <div class="price-card">
        <h3>Dry Needling</h3>
        <p class="desc">Behandeling van spierknopen en spanning voor sneller herstel.</p>
        <span>€55</span>
    </div>

    <div class="price-card">
        <h3>Revalidatie</h3>
        <p class="desc">Begeleiding bij herstel na blessure of operatie.</p>
        <span>€60</span>
    </div>

    <div class="price-card">
        <h3>Therapie</h3>
        <p class="desc">Persoonlijke behandeling gericht op pijnvermindering.</p>
        <span>€50</span>
    </div>

</section>

<!-- SEO TEXT -->
<section class="seo-section">

    <div class="seo-content">

        <h2>Behandelingen en tarieven in Stellendam</h2>

        <p>
            Delta Sportfysiotherapie biedt professionele fysiotherapie,
            sportmassage, dry needling en revalidatie.
            Wij helpen u met herstel, pijnvermindering en sportprestaties.
        </p>

    </div>

</section>

<!-- FOOTER -->
<footer>
    <p>© 2026 Delta Sportfysiotherapie</p>
</footer>

</body>
</html>