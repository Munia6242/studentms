<?php 

include 'db.php'; ?>

<h2>Registered Students</h2>
<a href="create.php">+ Add New Student</a>
<table border="1" cellpadding="5">
<tr>
    <th>Name</th><th>Phone</th><th>Subject</th><th>University</th><th>Actions</th>
</tr>

<?php
$res = $conn->query("SELECT * FROM students");
while($row = $res->fetch_assoc()):
?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['phone_number'] ?></td>
    <td><?= $row['preferable_subject'] ?></td>
    <td><?= $row['university_name'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | 
        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete student?')">Delete</a>
    </td>
</tr>
<?php endwhile; ?>
</table>

?>