<?php
$lang = $_GET['lang'] ?? 'nl';
$text = ($lang == 'en')
? include 'langEn.php'
: include 'langnl.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Over Ons</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>

    <div class="logo">
        <img src="logo.png" alt="Logo">
    </div>

    <nav>
        <ul>
            <li>
                <a href="index.php?lang=<?php echo $lang; ?>">
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
        <a href="?lang=nl">NL</a> |
        <a href="?lang=en">EN</a>
    </div>

</header>

<section class="hero">
<div class="hero-overlay">
<h1><?php echo $text['over_title']; ?></h1>
<p><?php echo $text['over_subtitle']; ?></p>
</div>
</section>

<section class="about-section">

<div class="about-card">
<h2>Wie zijn wij?</h2>
<p>Professionele fysiotherapie en sportbegeleiding.</p>
</div>

<div class="about-card">
<h2>Onze missie</h2>
<p>Mensen helpen sneller herstellen.</p>
</div>

<div class="about-card">
<h2>Ons team</h2>
<p>Ervaren fysiotherapeuten en coaches.</p>
</div>

</section>

<footer>
<p>© 2026 Delta Sportfysiotherapie</p>
</footer>

</body>
</html>