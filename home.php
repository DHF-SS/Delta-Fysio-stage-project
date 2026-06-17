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
<link rel="icon" type="image/png" href="logo.png">
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
                    <?php echo $text['sponsors']; ?>
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
            <?php echo $text['hero_title']; ?>
        </h1>

        <h2>
            <?php echo $text['hero_subtitle']; ?>
        </h2>

        <p>
            <?php echo $text['hero_text']; ?>
        </p>

        <a class="btn call"
        href="contact.php?lang=<?php echo $lang; ?>">

            <?php echo $text['book_call']; ?>

        </a>

    </div>

</section>

<!-- SERVICES -->
<section class="pricing-section">

    <div class="price-card">
        <?php echo $text['service_fysio']; ?>
    </div>

    <div class="price-card">
        <?php echo $text['service_massage']; ?>
    </div>

    <div class="price-card">
        <?php echo $text['service_revalidatie']; ?>
    </div>

    <div class="price-card">
        <?php echo $text['service_dryneedling']; ?>
    </div>

</section>

<!-- SEO CONTENT -->
<section class="seo-section">

<div class="seo-content">

<h2>
<?php echo $text['seo_home_title']; ?>
</h2>

<p>
<?php echo $text['seo_home_text1']; ?>
</p>

<p>
<?php echo $text['seo_home_text2']; ?>
</p>

</div>

</section>

<!-- ABOUT -->
<!-- ABOUT -->
<section class="about-section">

    <div class="about-card">

        <h3>
            <?php echo $text['why_us']; ?>
        </h3>

        <p>
            <?php echo $text['why_us_text']; ?>
        </p>

    </div>

    <div class="about-card">

        <h3>
            <?php echo $text['personal_approach']; ?>
        </h3>

        <p>
            <?php echo $text['personal_approach_text']; ?>
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