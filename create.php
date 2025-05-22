<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $stmt = $conn->prepare("INSERT INTO students (name, father_name, mother_name, address, educational_status, phone_number, university_name, preferable_subject, passing_year) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "ssssssssi",
        $_POST['name'],
        $_POST['father_name'],
        $_POST['mother_name'],
        $_POST['address'],
        $_POST['educational_status'],
        $_POST['phone_number'],
        $_POST['university_name'],
        $_POST['preferable_subject'],
        $_POST['passing_year']
    );
    $stmt->execute();
    header("Location: index.php");
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <div class="form-section">
        <h2>Please Register the form below</h2>
        <form method="POST">
            Name: <input type="text" name="name" required><br>
            Father Name: <input type="text" name="father_name"><br>
            Mother Name: <input type="text" name="mother_name"><br>
            Address: <textarea name="address"></textarea><br>
            Educational Status: <input type="text" name="educational_status"><br>
            Phone Number: <input type="text" name="phone_number"><br>
            University Name: <input type="text" name="university_name"><br>
            Preferable Subject: <input type="text" name="preferable_subject"><br>
            Passing Year: <input type="number" name="passing_year"><br>
            <input type="submit" name="submit" value="Register">
        </form>
    </div>
    <div class="image-section">
        <img src="student.jpg" alt="Student Registration">
    </div>
</div>
