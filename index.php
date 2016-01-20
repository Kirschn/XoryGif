<?php
$images = scandir("img");
?>
<!DOCTYPE html>
<html>
<head>
    <title>XoviGIF</title>
</head>
<body>
    <div>
        <?php
        foreach ($images as $image) {
            echo "<img src='img/$image' />";
        }
        ?>
    </div>
</body>
</html>