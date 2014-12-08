Easy-Repo-Depictions
=============

This makes depictions very easy. Simply make a new php named whatever you want that defines the variables below, and you can link to it using `http://yourrepo.com/depictions?dep=<filename>` (not including .php). This is the system used by the RCRepo and invented by @ibbignerd. In the RCRepo's case, we use package IDs for filenames, so the depiction for PreferenceReseter is http://rcrepo.com/depictions?dep=com.milodarling.preferencereseter.

It uses [HASHBANG's iOS 7 CSS](https://github.com/hbang/iOS-7-CSS).

First off, go into templates/index/ and edit devLink.php and footerText.php and change the links and stuff to fit your own repo. Note that *that* devLink gets put in every depiction, and the one you define in each individual file is put above it.

You can look at some of the examples I left, but basically, each file that defines the variables is in the root depiction directory and looks something like this:

    <?php
        $isUDIDProtected=TRUE; //you don’t have to define this if you want it to be false, you can just omit it.
        $name="Swag Tweak"; //title of the package
        
        $description=array(“This tweak is swag“, “This will be on the next line”);
        //each value in the array is a new paragraph
        //You may do links within the description, but must escape all speech marks within the link tag and you need target="_blank" for it to work in Cydia
        // ...array("This is my description. <a href=\"http://www.google.com\" target=\"_blank\">Here's a link to Google.com</a>! Here is more description"); 
        
        $changelog=array("1.0:"," - Initial release");
        //works the same as description
        
        $devText="Developer's twitter";//if devText has text, it will be included in the depiction
        $devLink="https://twitter.com/JamesIscNeutron";//if the dev wants to link to wherever, add it here.
    ?>

You can look at com.milodarling.preferencereseter.php as a fairly simple example and com.ibbigner.customtext.php as a fairly complex example.

As for screenshots, you simply make a folder in 'screenshots' with the same name as your php file, and in that folder, you put your screenshots named 1.png, 2.png, etc. You could change screenshots.php to support jpg as well.

Special thanks to @ibbignerd and @TheMacMini09 for their work on the RCRepo (including this depiction setup) and HASHBANG for the CSS.
