<?php
if (!isset($_GET["offset"]) or !is_numeric($_GET["offset"])) {
    $_GET["offset"] = 0;
}
$images = scandir("img");
sort($images);
for ($x = $_GET["offset"]; $x <= ($_GET["offset"] + 10); $x++) {
    if (isset($images[$x])) {
        $image = $images[$x];
        if ($image !== "." && $image !== "..") {
            echo "<a href='img/$image'><img height='200px' src='img/$image' /></a>";
        }
    }
};
