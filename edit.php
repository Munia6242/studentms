<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id = $id");
$data = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $father = $_POST['father_name'];
    $mother = $_POST['mother_name'];
    $address = $_POST['address'];
    $education = $_POST['educational_status'];
    $phone = $_POST['phone_number'];
    $university = $_POST['university_name'];
    $subject = $_POST['preferable_subject'];
    $year = $_POST['passing_year'];

    $conn->query("UPDATE students SET 
        name='$name',
        father_name='$father',
        mother_name='$mother',
        address='$address',
        educational_status='$education',
        phone_number='$phone',
        university_name='$university',
        preferable_subject='$subject',
        passing_year='$year'
        WHERE id=$id");

    header("Location: index.php");
    exit;
}
?>

<link rel="stylesheet" href="style.css">

<div class="form-container">
    <h2>Edit Student Information</h2>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?= $data['name'] ?>" required>

        <label>Father Name:</label>
        <input type="text" name="father_name" value="<?= $data['father_name'] ?>" required>

        <label>Mother Name:</label>
        <input type="text" name="mother_name" value="<?= $data['mother_name'] ?>" required>

        <label>Home Address:</label>
        <input type="text" name="address" value="<?= $data['address'] ?>" required>

        <label>Educational Status:</label>
        <input type="text" name="educational_status" value="<?= $data['educational_status'] ?>" required>

        <label>Phone Number:</label>
        <input type="text" name="phone_number" value="<?= $data['phone_number'] ?>" required>

        <label>University Name:</label>
        <input type="text" name="university_name" value="<?= $data['university_name'] ?>" required>

        <label>Preferable Subject:</label>
        <input type="text" name="preferable_subject" value="<?= $data['preferable_subject'] ?>" required>

        <label>Passing Year:</label>
        <input type="text" name="passing_year" value="<?= $data['passing_year'] ?>" required>

        <button type="submit" name="submit">Update</button>
    </form>
</div>