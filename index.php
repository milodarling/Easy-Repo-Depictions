<?php    $dep = htmlspecialchars($_GET["dep"]);
    if(file_exists($dep . ".php")){
        require($dep . ".php");
        include("template/index/head2.php");
        
        echo "<title>$name</title></head>";
        
        include("template/index/description.php");
        if ($isUDIDProtected){
        	echo "<p style=\"color: red;\">This package is UDID protected! You must be have your device registered to downlaod this package</p>"
        }
        foreach($description as $p){
            echo "<p>$p</p>";
        };
        
        echo "</li>";
        
       $dir = glob("screenshots/" . $dep . "/*.png");
        sort($dir);
        foreach($dir as $file ){      //echo "<script type='text/javascript'>alert('$file');</script>";
          $x += 1;
        }
        
        if($x > 0){
            include("template/index/screenshots2.php");
        } else{
            echo "</ul>";
        }
        
        if(strlen($devText) > 1){
            include("template/index/devLink.php");
            echo "<a class=\"devLink\" target=\"_blank\" href=\"$devLink\">$devText</a></li></ul>";
        }
        
        $file="stats.txt";
        $handle = @fopen($file, "r");
        $count = 0;
        
        if($handle){
            while (($b = fgets($handle, 4096)) !== false){
                $c = explode(":", $b);
                if(strpos($c[0], $dep) !== false){
                    $count += $c[1];
                }
            }
        }
        
        /*echo "<ul><li id='downloads'>
        Total Downloads: ".$count."
        </li></ul>";*/
        
        if(count($changelog) > 0){
            include("template/index/changelog.php");
            
            foreach($changelog as $c){
                echo "<p>$c</p>";
            }
            echo "</li></ul>";
        }
        
        include("template/index/footer.php");
    }
    else{
        echo "Depiction does not exist";
    }
?>