<?php
    $name="PreferenceReseter";
    $description=array(
    "<text style=\"color: red;\">This package is a replacement to PreferenceRemover. I changed the name because with the new features I implemented, it does not simply remove preferences anymore, so the name was inaccurate.</text>",
    "Resets a tweak's preferences. Pick the package ID of the tweak you want to reset, press the button, respring, and you're done! Simply removing the plist doesn't work anymore for iOS 8 tweaks, so I made this utility to make it easy to reset preferences",
    "If you'd like to design me an icon, please do so!");
    
    $changelog=array(
    "0.0.1-4", " - Finally fixed the bug that would cause users with files whose names were less than 6 characters long to crash!",
    		   " - Hides more system preferences to help fool-proof it and chooses plist files only (skips folders and random files)",
    		   " - Automatically adds backup folder now (/Library/PreferenceRemover/)",
    "0.0.1-3", " - Added more logging to help debug some crashes",
    "0.0.1-2", " - Removes plist file in addition to reseting the preferences in memory",
    		   " - Added option to overwrite a tweak's preferences with the preferences contained in another plist! Now this is a plist backup/restore solution!",
    		   " - Resprings are now done through Flipswitch in order to preserver battery usage data",
    "0.0.1-1", " - Initial release.");
    
    $devText="Developer's Twitter";
    $devLink="https://twitter.com/JamesIscNeutron";
?>