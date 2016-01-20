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
            if ($image !== "." && $image !== "..") {
                echo "<a href='img/$image'><img src='img/$image' /></a>";
            }
        }
        ?>
    </div>
</body>
</html>