<?php
$images = scandir("img");
?>
<!DOCTYPE html>
<html>
<head>
    <title>XoviGIF</title>
    <style>
        #githublink {
            position: fixed;
            right: 0;
            bottom: 0;
            margin: 5px;
            font-family: Arial;
        }
    </style>
</head>
<body>
    <div>
        <?php
        foreach ($images as $image) {
            if ($image !== "." && $image !== "..") {
                echo "<a href='img/$image'><img height='200px' src='img/$image' /></a>";
            }
        }
        ?>
    </div>
    <div id="githublink">
        <a href="http://github.com/Kirschn/XoviGif">GitHub</a>
    </div>
</body>
</html>