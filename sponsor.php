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

<title>
<?php echo $text['sponsor_title']; ?>
</title>

<meta name="description"
content="<?php echo $text['sponsor_subtitle']; ?>">

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
<a class="active" href="sponsor.php?lang=<?php echo $lang; ?>">
<?php echo $text['sponsors']; ?>
</a>
</li>

</ul>
</nav>

<div class="lang-switch">
<a href="sponsor.php?lang=nl">NL</a> |
<a href="sponsor.php?lang=en">EN</a> |
<a href="sponsor.php?lang=de">DE</a>
</div>

</header>

<!-- HERO -->
<section class="hero small-hero">

<div class="hero-overlay">

<h1>
<?php echo $text['sponsor_title']; ?>
</h1>

<p>
<?php echo $text['sponsor_subtitle']; ?>
</p>

</div>

</section>

<!-- SPONSORS -->
<section class="sponsor-section">

<div class="sponsor-card">

<h3>
<?php echo $text['sponsor1_title']; ?>
</h3>

<p>
<?php echo $text['sponsor1_text']; ?>
</p>

</div>

<div class="sponsor-card">

<h3>
<?php echo $text['sponsor2_title']; ?>
</h3>

<p>
<?php echo $text['sponsor2_text']; ?>
</p>

</div>

<div class="sponsor-card">

<h3>
<?php echo $text['sponsor3_title']; ?>
</h3>

<p>
<?php echo $text['sponsor3_text']; ?>
</p>

</div>

</section>

<!-- SEO TEXT -->
<section class="seo-section">

<div class="seo-content">

<h2>
<?php echo $text['local_partners']; ?>
</h2>

<p>
<?php echo $text['local_partners_text']; ?>
</p>

</div>

</section>

<!-- FOOTER -->
<footer>
<p>© 2026 Delta Sportfysiotherapie</p>
</footer>

</body>
</html>