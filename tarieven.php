<?php
$lang = $_GET['lang'] ?? 'nl';

include 'config/db.php';

$prices = [];

$result = $conn->query("SELECT * FROM prices");

while($row = $result->fetch_assoc()){
    $prices[$row['name_key']] = $row;
}

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

<title><?php echo $text['tarieven_title']; ?></title>

<meta name="description"
content="<?php echo $text['pricing_seo_text']; ?>">

<link rel="stylesheet" href="style.css">
</head>

<body>

<header>

<div class="logo">
    <img src="logo.png" alt="Delta Sportfysiotherapie logo">
</div>

<nav>
<ul>

<li>
<a href="home.php?lang=<?php echo $lang; ?>">
<?php echo $text['home']; ?>
</a>
</li>

<li>
<a class="active" href="tarieven.php?lang=<?php echo $lang; ?>">
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
<a href="tarieven.php?lang=nl">NL</a> |
<a href="tarieven.php?lang=en">EN</a> |
<a href="tarieven.php?lang=de">DE</a>
</div>

</header>

<section class="hero small-hero">

<div class="hero-overlay">

<h1><?php echo $text['tarieven_title']; ?></h1>

<p><?php echo $text['tarieven_subtitle']; ?></p>

</div>

</section>

<section class="pricing-section">

<div class="price-card">
    <h3><?php echo $text['intake']; ?></h3>
    <p class="desc"><?php echo $prices['intake']['description_key']; ?></p>
    <span>€<?php echo $prices['intake']['price']; ?></span>
</div>

<div class="price-card">
    <h3><?php echo $text['sportmassage']; ?></h3>
    <p class="desc"><?php echo $prices['sportmassage']['description_key']; ?></p>
    <span>€<?php echo $prices['sportmassage']['price']; ?></span>
</div>

<div class="price-card">
    <h3><?php echo $text['dryneedling']; ?></h3>
    <p class="desc"><?php echo $prices['dryneedling']['description_key']; ?></p>
    <span>€<?php echo $prices['dryneedling']['price']; ?></span>
</div>

<div class="price-card">
    <h3><?php echo $text['revalidatie']; ?></h3>
    <p class="desc"><?php echo $prices['revalidatie']['description_key']; ?></p>
    <span>€<?php echo $prices['revalidatie']['price']; ?></span>
</div>

<div class="price-card">
    <h3><?php echo $text['therapie']; ?></h3>
    <p class="desc"><?php echo $prices['therapie']['description_key']; ?></p>
    <span>€<?php echo $prices['therapie']['price']; ?></span>
</div>

</section>

<section class="seo-section">

<div class="seo-content">

<h2><?php echo $text['pricing_seo_title']; ?></h2>

<p><?php echo $text['pricing_seo_text']; ?></p>

</div>

</section>

<footer>
<p>© 2026 Delta Sportfysiotherapie</p>
</footer>

</body>
</html>