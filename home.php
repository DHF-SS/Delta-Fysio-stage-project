
<?php
$lang = $_GET['lang'] ?? 'nl';

if ($lang == 'en') {
    $text = include __DIR__ . '/langEn.php';
} elseif ($lang == 'de') {
    $text = include __DIR__ . '/langDeu.php';
} else {
    $text = include __DIR__ . '/langnl.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>
    <div class="line2"></div>
    <div class="line"></div>
  <div class="navbar-bg">
    <div class="navbar">
      
      <a class="logo" href="home.php">
        <img src="logo.png" alt="Logo">
      </a>

      <nav>
        <ul>
          <li><a href="home.php"><?php echo $text['home']; ?></a></li>
          <li><a href="#"><?php echo $text['tarieven']; ?></a></li>
          <li><a href="contact.php" class="active"><?php echo $text['contact']; ?></a></li>
          <li><a href="#"><?php echo $text['over_ons']; ?></a></li>
          <li><a href="#"><?php echo $text['sponsor']; ?></a></li>
        </ul>
      </nav>

      <div class="lang-switch">
        <a href="?lang=nl">NL</a> | 
        <a href="?lang=en">EN</a> | 
        <a href="?lang=de">DE</a>
      </div>

    </div>
  </div>
  <div class="text">
  <h2>Welkom bij Delta Sportfysio</h2>
    <h1> Samen is beter</h1>
      <button class="btn-primary">
        <a href="home.php">Gesprek Boeken</a>
      </button>
</div>
</header>


<div class="page-content">
    <div class="folder">
      <div class="main">
        <div class="main-top">
          <div class="box1"></div>
          <div class="box2"></div>
        </div>
        <div class="info-groep"></div>
      </div>
    </div>

    <div class="main2">
      <div class="card-container">
        <div class="card">Card 1</div>
        <div class="card">Card 2</div>
        <div class="card">Card 3</div>
        <div class="card">Card 4</div>
      </div>

      <div class="esports">
        <div class="boxe"></div>
        <div class="boxp"></div>
      </div>
    </div>

  </div>
</div>
  <footer class="footer1">
    <p>© 2026 My Website</p>
  </footer>
</body>
</html>