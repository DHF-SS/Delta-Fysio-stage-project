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

<title>Over ons | Delta Sportfysiotherapie Stellendam</title>

<meta name="description" content="Maak kennis met Delta Sportfysiotherapie in Stellendam. Ons team helpt bij fysiotherapie, revalidatie, sportblessures en hersteltraining.">

<link rel="stylesheet" href="style.css">

</head>

<body>

<!-- HEADER -->
<header>

    <div class="logo">
        <img src="logo.png" alt="Delta Sportfysiotherapie logo">
    </div>

    <nav>
        <ul>
            <li><a href="home.php?lang=<?php echo $lang; ?>"><?php echo $text['home']; ?></a></li>
            <li><a href="tarieven.php?lang=<?php echo $lang; ?>"><?php echo $text['tarieven']; ?></a></li>
            <li><a href="contact.php?lang=<?php echo $lang; ?>"><?php echo $text['contact']; ?></a></li>
            <li><a class="active" href="over-ons.php?lang=<?php echo $lang; ?>"><?php echo $text['over_ons']; ?></a></li>
            <li><a href="sponsor.php?lang=<?php echo $lang; ?>"><?php echo $text['sponsor']; ?></a></li>
        </ul>
    </nav>

    <!-- LANGUAGE SWITCH -->
    <div class="lang-switch">
        <a href="over-ons.php?lang=nl">NL</a> |
        <a href="over-ons.php?lang=en">EN</a> |
        <a href="over-ons.php?lang=de">DE</a>
    </div>

</header>

<!-- HERO -->
<section class="hero small-hero">

    <div class="hero-overlay">

        <h1>Over ons</h1>

        <p>Professionele fysiotherapie en persoonlijke begeleiding</p>

    </div>

</section>

<!-- ABOUT CONTENT -->
<section class="about-section">

    <div class="about-card">

        <h2>Wie zijn wij?</h2>

        <p>
            Delta Sportfysiotherapie is een moderne praktijk in Stellendam
            gespecialiseerd in fysiotherapie, sportblessures en revalidatie.
            Wij helpen patiënten om snel en veilig te herstellen.
        </p>

    </div>

    <div class="about-card">

        <h2>Onze missie</h2>

        <p>
            Onze missie is om mensen te helpen pijnvrij te bewegen,
            sterker te worden en beter te presteren in sport en dagelijks leven.
        </p>

    </div>

    <div class="about-card">

        <h2>Ons team</h2>

        <p>
            Ons team bestaat uit ervaren fysiotherapeuten
            met passie voor sport, herstel en gezondheid.
        </p>

    </div>

</section>

<!-- SEO TEXT -->
<section class="seo-section">

    <div class="seo-content">

        <h2>Fysiotherapie in Stellendam</h2>

        <p>
            Wij bieden persoonlijke begeleiding bij blessures,
            revalidatie en sportgerelateerde klachten.
            Iedere behandeling wordt afgestemd op uw situatie.
        </p>

    </div>

</section>

<!-- FOOTER -->
<footer>
    <p>© 2026 Delta Sportfysiotherapie</p>
</footer>

</body>
</html>