<?php
	$isUDIDProtected=TRUE;
    $name="CustomText";
    $description=array(
"Create your own widget with a <text style=\"font-family:'Times New Roman'\">font</text>, <text style='color:green'>color</text>, <text style='font-size:12px'>size</text>, and <strong>text-decoration</strong> that suits you. Just enter a placeholder and CustomTime with replace it with the appropriate text.<br><br>
\$Mo = January<br>
\$mo = Jan<br>
\$W  = Sunday<br>
\$w  = Sun<br>
\$D  = 1<br>
\$d  = 1st<br>
\$y  = 14<br>
\$Y  = 2014<br>
\$H  = 24 hour<br>
\$h  = 12 hour<br>
\$m  = Minutes<br>
\$M  = Minutes<br>
\$s  = Seconds<br>
\$S  = Seconds<br>
\$b  = Line Break<br>
$0  = Format default<br>
$1  = Format 1<br>
$2  = Format 2<br>
$3  = Format 3<br>
$4  = Format 4<br><br>
For example, if you entered \"Today is \$Mo \$d, '\$y\$bAnd it is \$h:\$m\" it would return back the following:<br>
Today is January 1st, '17<br>
And it is 11:14<br><br>
<strong>Please note</strong> that you must include a size for the \"Font Size\" fields. Most common is \"px\", but you may also use \"em\".");
    
    $changelog=array(
"<b>0.2:</b>",
" - Doesn't update time when not displaying it (reduces memory usage)",
"<b>0.1:</b>",
" - Initial Release.");
    
    $devText="@ibbignerd";
    $devLink="https://twitter.com/ibbignerd";
?>