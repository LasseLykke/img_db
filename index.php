<?php 
include 'connection.php';
?>

<html>
    <head>
        <title>Img uploader</title>
        <body>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <button type="submit" name="submit">Upload</button>
        </body>
    </head>
</html>