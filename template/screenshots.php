<!DOCTYPE html>

<html>
<head>
    <?php
    require("variables.php");
    ?>
    <link href="../css/ios7.css" rel="stylesheet">
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport">
    <?php
        echo "<title>$name</title>";
    ?>
</head>

<body>
    <?php
        echo "<h2>Screenshots of $name</h2>";
    ?>
    

    <ul>
        <li>
        <?php
            $dir = glob("screenshots/*.png");
            sort($dir);
            foreach($dir as $file ){
                echo "<p><a href=\"$file\"><img src=\"$file\" /></a></p>";
            }
        ?>
        </li>
    </ul>

    <p><a href="http://reddit.com/r/RCRepo">Reddit Community Repo</a></p>
</body>
</html>