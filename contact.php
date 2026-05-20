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

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>
Contact | Delta Sportfysiotherapie Stellendam
</title>

<meta name="description"
content="Neem contact op met Delta Sportfysiotherapie in Stellendam voor fysiotherapie, dry needling, sportmassage en revalidatie.">

<meta name="keywords"
content="contact fysiotherapie Stellendam, sportfysiotherapie contact, revalidatie Stellendam">

<meta name="author"
content="Delta Sportfysiotherapie">

<meta name="robots"
content="index, follow">

<link rel="canonical"
href="https://jouwdomein.nl/contact.php?lang=<?php echo $lang; ?>">

<!-- Open Graph -->
<meta property="og:title"
content="Contact | Delta Sportfysiotherapie">

<meta property="og:description"
content="Neem contact op met Delta Sportfysiotherapie in Stellendam.">

<meta property="og:image"
content="https://jouwdomein.nl/logo.png">

<meta property="og:type"
content="website">

<meta property="og:url"
content="https://jouwdomein.nl/contact.php">

<!-- Hreflang -->
<link rel="alternate" hreflang="nl"
href="https://jouwdomein.nl/contact.php?lang=nl">

<link rel="alternate" hreflang="en"
href="https://jouwdomein.nl/contact.php?lang=en">

<link rel="alternate" hreflang="de"
href="https://jouwdomein.nl/contact.php?lang=de">

<link rel="stylesheet" href="style.css">

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
<a href="home.php?lang=<?php echo $lang; ?>">
<?php echo $text['home']; ?>
</a>
</li>

<li>
<a href="tarieven.php?lang=<?php echo $lang; ?>">
<?php echo $text['tarieven']; ?>
</a>
</li>

<li>
<a href="contact.php?lang=<?php echo $lang; ?>"
class="active">
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
<section class="hero small-hero">

<div class="hero-overlay">

<h1>
Contact met Delta Sportfysiotherapie
</h1>

<p>
Professionele fysiotherapie en sportbegeleiding
in Stellendam
</p>

</div>

</section>

<!-- CONTACT SECTION -->
<section class="contact-section">

<div class="contact-card">

<h2>
Contactgegevens
</h2>

<p>
Deltageul 22,
3251NG Stellendam
</p>

<p>

<?php echo $text['telefoon']; ?>:

<a href="tel:0187490973">
0187 490 973
</a>

</p>

<p>

<?php echo $text['email']; ?>:

<a href="mailto:info@deltafysio.nl">
info@deltafysio.nl
</a>

</p>

<div class="buttons">

<a class="btn call"
href="tel:0187490973">

<?php echo $text['bel_ons']; ?>

</a>

<a class="btn route"
href="https://www.google.com/maps?q=Deltageul+22+3251NG+Stellendam"
target="_blank">

<?php echo $text['route']; ?>

</a>

</div>

</div>

<!-- MAP -->
<div class="map-container">

<iframe
src="https://www.google.com/maps?q=Deltageul+22+3251NG+Stellendam&output=embed"
width="100%"
height="400"
style="border:0;"
allowfullscreen=""
loading="lazy">

</iframe>

</div>

</section>

<!-- SEO CONTENT -->
<section class="seo-section">

<div class="seo-content">

<h2>
Fysiotherapie praktijk in Stellendam
</h2>

<p>
Delta Sportfysiotherapie helpt dagelijks
sporters en patiënten met professionele
fysiotherapie, revalidatie en hersteltraining.
Onze praktijk in Stellendam biedt persoonlijke
begeleiding voor sneller herstel en betere prestaties.
</p>

<p>
Heeft u last van blessures, spierklachten
of sportgerelateerde pijn?
Neem vandaag nog contact met ons op
voor een afspraak of persoonlijk advies.
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