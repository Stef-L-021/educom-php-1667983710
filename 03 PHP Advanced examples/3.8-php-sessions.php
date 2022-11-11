<!-- A session is a way to store information (in variables) to be used across multiple pages.
Unlike a cookie, the information is not stored on the users computer. -->

<!--  start the session -->

<?php

session_start();            // the session start function must be the very first thing in your document. Before any HTML tags.
?>

<!DOCTYPE html>
<html>
<body>

<?php
// set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set"
?>

</body>
</html>

<!-- Get PHP Session Variable Values -->

<?php

session_start();            
?>

<!DOCTYPE html>
<html>
<body>

<?php
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
// OR
print_r($_SESSION);
?>

</body>
</html>

<!-- Modify a PHP session variable --> 

<?php

session_start();        
?>

<!DOCTYPE html>
<html>
<body>

<?php
// For this we just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>


<!-- Destroy a PHP session -->

<?php

session_start();        
?>

<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();
echo "session unset <br>";               // of je kan gebruiken: echo "<br>";

// destroy the session:
session_destroy();
echo "session destroyed";
?>

</body>
</html>