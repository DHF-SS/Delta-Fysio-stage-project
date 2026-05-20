<?php
$lang = $_GET['lang'] ?? 'nl';

switch ($lang) {

    case 'en':
        $text = include __DIR__ . '/langEn.php';
        break;

    case 'de':
        $text = include __DIR__ . '/langDe.php';
        break;

    default:
        $text = include __DIR__ . '/langnl.php';
        break;
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Delta Sportfysiotherapie | Fysiotherapie in Stellendam</title>

<meta name="description"
content="Professionele fysiotherapie in Stellendam voor sporters en revalidatie. Dry needling, sportmassage en persoonlijke begeleiding bij Delta Sportfysiotherapie.">

<meta name="keywords"
content="fysiotherapie Stellendam, sportfysiotherapie, dry needling, revalidatie, sportmassage">

<meta name="author" content="Delta Sportfysiotherapie">

<meta name="robots" content="index, follow">

<link rel="canonical"
href="https://jouwdomein.nl/home.php?lang=<?php echo $lang; ?>">

<!-- Open Graph -->
<meta property="og:title"
content="Delta Sportfysiotherapie">

<meta property="og:description"
content="Professionele fysiotherapie en sportbegeleiding in Stellendam">

<meta property="og:image"
content="https://jouwdomein.nl/logo.png">

<meta property="og:type"
content="website">

<meta property="og:url"
content="https://jouwdomein.nl/home.php">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">

<!-- Hreflang -->
<link rel="alternate" hreflang="nl"
href="https://jouwdomein.nl/home.php?lang=nl">

<link rel="alternate" hreflang="en"
href="https://jouwdomein.nl/home.php?lang=en">

<link rel="alternate" hreflang="de"
href="https://jouwdomein.nl/home.php?lang=de">

<link rel="stylesheet" href="style.css">
<link rel="icon" href="favicon.ico">
</head>

<body>

<header>

    <div class="logo">
        <img
        src="logo.png"
        alt="Delta Sportfysiotherapie logo"
        loading="lazy">
    </div>

    <nav>
        <ul>

            <li>
                <a href="home.php?lang=<?php echo $lang; ?>" class="active">
                    <?php echo $text['home']; ?>
                </a>
            </li>

            <li>
                <a href="tarieven.php?lang=<?php echo $lang; ?>">
                    <?php echo $text['tarieven']; ?>
                </a>
            </li>

            <li>
                <a href="contact.php?lang=<?php echo $lang; ?>">
                    <?php echo $text['contact']; ?>
                </a>
            </li>

            <li>
                <a href="over-ons.php?lang=<?php echo $lang; ?>">
                    <?php echo $text['over_ons']; ?>
                </a>
            </li>

            <li>
                <a href="sponsor.php?lang=<?php echo $lang; ?>">
                    <?php echo $text['sponsor']; ?>
                </a>
            </li>

        </ul>
    </nav>

    <div class="lang-switch">

        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>?lang=nl">
            NL
        </a>

        |

        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>?lang=en">
            EN
        </a>

        |

        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>?lang=de">
            DE
        </a>

    </div>

</header>

<!-- HERO -->
<section class="hero">

    <div class="hero-overlay">

        <h1>
            Sportfysiotherapie in Stellendam
        </h1>

        <h2>
            Professionele begeleiding voor herstel,
            revalidatie en sportprestaties
        </h2>

        <p>
            Delta Sportfysiotherapie helpt sporters
            en patiënten met persoonlijke fysiotherapie,
            dry needling, sportmassage en professionele revalidatie.
        </p>

        <a class="btn call"
        href="contact.php?lang=<?php echo $lang; ?>">
            Gesprek boeken
        </a>

    </div>

</section>

<!-- SERVICES -->
<section class="pricing-section">

    <div class="price-card">
        Fysiotherapie
    </div>

    <div class="price-card">
        Sportmassage
    </div>

    <div class="price-card">
        Revalidatie
    </div>

    <div class="price-card">
        Dry Needling
    </div>

</section>

<!-- SEO CONTENT -->
<section class="seo-section">

<div class="seo-content">

<h2>
Professionele fysiotherapie in Stellendam
</h2>

<p>
Bij Delta Sportfysiotherapie bieden wij professionele
behandeling voor blessures, revalidatie en sportherstel.
Onze praktijk in Stellendam helpt dagelijks sporters,
jongeren en volwassenen met persoonlijke begeleiding.
</p>

<p>
Wij zijn gespecialiseerd in sportfysiotherapie,
dry needling, massage en hersteltraining.
Met moderne behandelmethodes zorgen wij
voor sneller herstel en betere prestaties.
</p>

</div>

</section>

<!-- ABOUT -->
<section class="about-section">

    <div class="about-card">

        <h3>
            Waarom kiezen voor ons?
        </h3>

        <p>
            Professionele begeleiding voor sport,
            herstel en revalidatie in Stellendam.
        </p>

    </div>

    <div class="about-card">

        <h3>
            Persoonlijke aanpak
        </h3>

        <p>
            Iedere behandeling wordt volledig afgestemd
            op uw lichaam en doelstellingen.
        </p>

    </div>

</section>

<!-- FOOTER -->
<footer>

<p>
© 2026 Delta Sportfysiotherapie
</p>

</footer>

<!-- STRUCTURED DATA -->
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "Physiotherapy",
 "name": "Delta Sportfysiotherapie",
 "image": "https://jouwdomein.nl/logo.png",
 "url": "https://jouwdomein.nl",
 "telephone": "+31187490973",
 "address": {
   "@type": "PostalAddress",
   "streetAddress": "Deltageul 22",
   "addressLocality": "Stellendam",
   "postalCode": "3251NG",
   "addressCountry": "NL"
 },
 "areaServed": "Goeree-Overflakkee"
}
</script>

</body>
</html>