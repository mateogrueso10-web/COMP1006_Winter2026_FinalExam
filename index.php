<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <div class="container">

    <!-- display upload form -->
    <h1>Upload a file</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
        </div>
        <input type="submit" value="Upload File" name="submit" class="btn btn-primary">

    </form>
    </div>

    <div class="text-center mt-5">
        <a href="gallery.php" class="btn btn-secondary">View Gallery</a>
    </div>

    </html>