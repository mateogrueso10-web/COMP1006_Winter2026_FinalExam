<?php

require_once "connect.php";
$stmt = $pdo->prepare("SELECT * FROM images");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Gallery</h1>
        <div class="gallery">
            <?php foreach ($results as $row): ?>
                <div class="gallery-item">
                    <img src="<?php echo $row['file_path']; ?>" class="card-img-top img-fluid" style="max-height:250px; object-fit:cover;">
                    <p class="text-muted"><?php echo $img['file_name']; ?></p>
                    <small class="text-secondary"><?php echo date("F j, Y H:i", strtotime($img['uploaded_at'])); ?></small>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>

