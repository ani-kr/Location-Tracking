<?php
include 'db.php';
$res = mysqli_query($conn,"SELECT * FROM locations ORDER BY id DESC");
$data = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Location</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="map-container">
    <h2 style="text-align:center; margin-bottom:20px;">📍 User Location</h2>

    <div class="user-info">
        <b>Name:</b> <?= htmlspecialchars($data['name']) ?><br>
        <b>Email:</b> <?= htmlspecialchars($data['email']) ?><br>
        <b>Phone:</b> <?= htmlspecialchars($data['phone']) ?><br>
        <b>Description:</b> <?= htmlspecialchars($data['description']) ?>
    </div>

    <iframe
        src="https://www.google.com/maps?q=<?= $data['latitude'] ?>,<?= $data['longitude'] ?>&output=embed">
    </iframe>
</div>

</body>
</html>
