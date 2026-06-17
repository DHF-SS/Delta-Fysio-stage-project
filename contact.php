<?php
include '../config/auth.php';
include '../config/db.php';

$data = $conn->query("SELECT * FROM contact_info WHERE id=1")->fetch_assoc();
?>

<h2>Contact Info</h2>

<form method="POST">

<input name="phone" value="<?php echo $data['phone']; ?>">
<input name="email" value="<?php echo $data['email']; ?>">
<textarea name="address"><?php echo $data['address']; ?></textarea>

<button name="save">Save</button>

</form>

<?php
if(isset($_POST['save'])){
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $conn->query("UPDATE contact_info SET phone='$phone', email='$email', address='$address' WHERE id=1");

    echo "Saved!";
}
?>