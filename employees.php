<?php
include '../config/auth.php';
include '../config/db.php';

/* UPDATE */
if (isset($_POST['update'])) {

    $id = (int)$_POST['id'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $desc = $_POST['desc'];

    /* 1. update image alleen als er een nieuwe is */
    if (!empty($_FILES['image']['name'])) {

        $img = "images/" . time() . "_" . basename($_FILES['image']['name']);

        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            "../" . $img
        );

        $stmt = $conn->prepare("UPDATE employees SET image=? WHERE id=?");
        $stmt->bind_param("si", $img, $id);
        $stmt->execute();
    }

    /* 2. update tekst */
    $stmt = $conn->prepare("
        UPDATE employees
        SET name=?, role=?, description=?
        WHERE id=?
    ");

    $stmt->bind_param("sssi", $name, $role, $desc, $id);
    $stmt->execute();

    header("Location: employees.php?saved=1");
    exit;
}

/* DELETE */
if (isset($_GET['delete'])) {

    $id = (int)$_GET['delete'];

    $stmt = $conn->prepare("DELETE FROM employees WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: employees.php?deleted=1");
    exit;
}

/* DATA OPHALEN */
$result = $conn->query("SELECT * FROM employees");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Employees Admin</title>

<style>
body { font-family: Arial; }
table { width: 100%; border-collapse: collapse; }
td, th { border: 1px solid #ccc; padding: 10px; }
img { width: 80px; }
</style>

</head>

<body>

<h1>Employees Admin</h1>

<?php if(isset($_GET['saved'])) echo "<p style='color:green'>✔ Opgeslagen</p>"; ?>
<?php if(isset($_GET['deleted'])) echo "<p style='color:red'>🗑 Verwijderd</p>"; ?>

<table>

<tr>
    <th>Foto</th>
    <th>Naam</th>
    <th>Rol</th>
    <th>Beschrijving</th>
    <th>Acties</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>

<tr>

<form method="POST" enctype="multipart/form-data">

    <td>
        <img src="../<?php echo $row['image']; ?>">
        <br>
        <input type="file" name="image">
    </td>

    <td>
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
    </td>

    <td>
        <input type="text" name="role" value="<?php echo $row['role']; ?>">
    </td>

    <td>
        <textarea name="desc"><?php echo $row['description']; ?></textarea>
    </td>

    <td>

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <button type="submit" name="update">💾 Save</button>

        <a href="employees.php?delete=<?php echo $row['id']; ?>"
           onclick="return confirm('Verwijderen?')">
           🗑 Delete
        </a>

    </td>

</form>

</tr>

<?php endwhile; ?>

</table>

</body>
</html>