<?php
$images = scandir("img");
?>
<!DOCTYPE html>
<html>
<head>
    <title>XoviGIF</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <style>
        #githublink {
            position: fixed;
            right: 0;
            bottom: 0;
            margin: 5px;
            font-family: Arial;
        }
    </style>
    <script>
        var offset = 0;
        function loadContent() {
            $.get("images.php", function (data) {
                $("#imagecontent").append(data);
                offset += 10;
            })
        }
    </script>
</head>
<body onload="loadContent()">
    <div id="imagecontent">
        
    </div>
    <div id="githublink">
        <a href="http://github.com/Kirschn/XoviGif">GitHub</a>
        <button onclick="loadContent()">
            Load More...
        </button>
    </div>
</body>
</html>