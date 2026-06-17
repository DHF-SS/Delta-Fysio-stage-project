<?php
include '../config/auth.php';
include '../config/db.php';

if(isset($_POST['update'])){

    $id = (int)$_POST['id'];
    $price = (float)$_POST['price'];
    $desc = $_POST['desc'];

    $stmt = $conn->prepare("
        UPDATE prices
        SET price = ?, description_key = ?
        WHERE id = ?
    ");

    $stmt->bind_param("dsi", $price, $desc, $id);
    $stmt->execute();

    header("Location: prices.php?saved=1");
    exit;
}

$result = $conn->query("SELECT * FROM prices");
?>

<h2>Prices</h2>

<?php if(isset($_GET['saved'])): ?>
<p style="color:green;">Updated successfully!</p>
<?php endif; ?>

<?php while($row = $result->fetch_assoc()): ?>

<form method="POST">

    <input type="hidden" name="id"
           value="<?php echo $row['id']; ?>">

    <h3><?php echo htmlspecialchars($row['name_key']); ?></h3>

    <label>Price</label><br>
    <input
        type="number"
        step="0.01"
        name="price"
        value="<?php echo $row['price']; ?>"
    >

    <br><br>

    <label>Description</label><br>

    <textarea
        name="desc"
        rows="3"
        cols="50"><?php echo htmlspecialchars($row['description_key']); ?></textarea>

    <br><br>

    <button type="submit" name="update">
        Save
    </button>

</form>

<hr>

<?php endwhile; ?>