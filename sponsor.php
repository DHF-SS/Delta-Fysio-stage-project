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

<title>Samenwerkingen | Delta Sportfysiotherapie</title>

<meta name="description" content="Onze partners en samenwerkingen met sportclubs en organisaties in Stellendam en omgeving. Delta Sportfysiotherapie ondersteunt sport en gezondheid.">

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
            <li><a href="over-ons.php?lang=<?php echo $lang; ?>"><?php echo $text['over_ons']; ?></a></li>
            <li><a class="active" href="sponsor.php?lang=<?php echo $lang; ?>"><?php echo $text['sponsor']; ?></a></li>
        </ul>
    </nav>

    <!-- LANGUAGE SWITCH -->
    <div class="lang-switch">
        <a href="sponsor.php?lang=nl">NL</a> |
        <a href="sponsor.php?lang=en">EN</a> |
        <a href="sponsor.php?lang=de">DE</a>
    </div>

</header>

<!-- HERO -->
<section class="hero small-hero">

    <div class="hero-overlay">

        <h1>Onze Samenwerkingen</h1>

        <p>Partners in sport, gezondheid en herstel</p>

    </div>

</section>

<!-- SPONSORS -->
<section class="sponsor-section">

    <div class="sponsor-card">
        <h3>FitLife Gym</h3>
        <p>
            Samenwerking met een lokale fitnessclub
            voor training en revalidatie ondersteuning.
        </p>
    </div>

    <div class="sponsor-card">
        <h3>Healthy Sports</h3>
        <p>
            Ondersteuning bij sportrevalidatie
            en blessurepreventie voor atleten.
        </p>
    </div>

    <div class="sponsor-card">
        <h3>Move Better</h3>
        <p>
            Samenwerking gericht op sportevents,
            training en fysieke prestaties.
        </p>
    </div>

</section>

<!-- SEO TEXT -->
<section class="seo-section">

    <div class="seo-content">

        <h2>Lokale partners in Stellendam</h2>

        <p>
            Delta Sportfysiotherapie werkt samen met sportclubs,
            fitnesscentra en gezondheidsorganisaties in de regio
            om sporters beter te begeleiden en te ondersteunen.
        </p>

    </div>

</section>

<!-- FOOTER -->
<footer>
    <p>© 2026 Delta Sportfysiotherapie</p>
</footer>

</body>
</html>