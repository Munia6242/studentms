<?php
include 'db.php';
$result = $conn->query("SELECT * FROM students");
?>

<link rel="stylesheet" href="style.css">

<div class="top-bar">
    <h2 class="page-title">All Registered Students</h2>
    <a href="create.php" class="add-btn">+ Add New Student</a>
</div>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Father</th>
                <th>Mother</th>
                <th>Address</th>
                <th>Education</th>
                <th>Phone</th>
                <th>University</th>
                <th>Subject</th>
                <th>Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['father_name'] ?></td>
                <td><?= $row['mother_name'] ?></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['educational_status'] ?></td>
                <td><?= $row['phone_number'] ?></td>
                <td><?= $row['university_name'] ?></td>
                <td><?= $row['preferable_subject'] ?></td>
                <td><?= $row['passing_year'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>" class="edit-btn">Edit</a>
                    <a href="delete.php?id=<?= $row['id'] ?>" class="delete-btn" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>