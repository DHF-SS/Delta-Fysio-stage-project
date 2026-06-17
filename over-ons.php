<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config/db.php';

/* taal */
$lang = $_GET['lang'] ?? 'nl';

switch ($lang) {
    case 'en':
        $text = include 'langEn.php';
        break;
    case 'de':
        $text = include 'langDe.php';
        break;
    default:
        $text = include 'langnl.php';
}

/* database */
if (!$conn) {
    die("Geen database verbinding");
}

$result = $conn->query("SELECT * FROM employees");

$employees = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $text['over_title']; ?></title>

<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<link rel="icon" type="image/png" href="logo.png">
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
                <a class="active" href="over-ons.php?lang=<?php echo $lang; ?>">
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
        <a href="over-ons.php?lang=nl">NL</a> |
        <a href="over-ons.php?lang=en">EN</a> |
        <a href="over-ons.php?lang=de">DE</a>
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
        <h2><?php echo $text['who_are_we'] ?? 'Wie zijn wij?'; ?></h2>
        <p><?php echo $text['who_are_we_text'] ?? 'Professionele fysiotherapie en sportbegeleiding.'; ?></p>
    </div>

    <div class="about-card">
        <h2><?php echo $text['mission'] ?? 'Onze missie'; ?></h2>
        <p><?php echo $text['mission_text'] ?? 'Mensen helpen sneller herstellen.'; ?></p>
    </div>

    <div class="about-card">
        <h2><?php echo $text['team'] ?? 'Ons team'; ?></h2>
        <p><?php echo $text['team_text'] ?? 'Ervaren fysiotherapeuten en coaches.'; ?></p>
    </div>

</section>

<section class="team-section">
    <div class="team-grid">

        <?php if (!empty($employees)): ?>
            <?php foreach ($employees as $employee): ?>
                <div class="team-card">
                    <img src="<?php echo $employee['image']; ?>" style="max-width:250px;">
                    <h3><?php echo $employee['name']; ?></h3>
                    <p><?php echo $employee['role']; ?></p>
                    <p><?php echo $employee['description']; ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</section>

<footer>
    <p>© 2026 Delta Sportfysiotherapie</p>
</footer>

</body>
</html>