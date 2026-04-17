<?php

require_once "connect.php";
$stmt = $conn->prepare("SELECT * FROM uploads");
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
                    <img src="<?php echo htmlspecialchars($row['file_path']); ?>" alt="Uploaded Image" class="gallery-image">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
