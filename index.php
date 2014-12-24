<?php    $dep = htmlspecialchars($_GET["dep"]);
    if(file_exists($dep . ".php")){
        require($dep . ".php");
        include("template/index/head2.php");
        
        echo "<title>$name</title></head>";
        
        include("template/index/description.php");
        if ($isUDIDProtected){
        	echo "<p style=\"color: red;\">This package is UDID protected! You must be have your device registered to download this package</p>";
        }

        if ($compatibleVersions) {
        	$uaString = $_SERVER["HTTP_USER_AGENT"];
        	if (preg_match("/(.*) OS ([0-9]*)_([0-9]*)_([0-9]*) (.*)/", $uaString)) {
        		$version = preg_replace("/(.*) OS ([0-9]*)_([0-9]*)_([0-9]*) (.*)/","$2.$3.$4", $uaString);
			} else if (preg_match("/(.*) OS ([0-9]*)_([0-9]*) (.*)/", $uaString)) {
        		$version = preg_replace("/(.*) OS ([0-9]*)_([0-9]*) (.*)/","$2.$3", $uaString);
        	}
        	if ($version) {
	        	if (in_array($version, $compatibleVersions)) {
        			echo "<p style=\"color: green;\">This package is compatible with your iOS version :)</p>";
    	    	} else {
	        		echo "<p style=\"color: #FFCC00\">This package is not comfirmed to work on your iOS version</p>";
        		}
        	}
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