<?php

echo "
<!DOCTYPE html>
<html lang='en'>
    <head>
";
include('header-content.php');
echo '
    </head>
    <body>
    <div id="container">
    <div id="header">
    <img src="includes/images/logo.png">    
    </div>
';
include('content.php');
echo
'
 </div>
 <div id="footer">
';
 include('footer.php');
 echo
 '
 </div>
 </body>
</html>
';
?>
