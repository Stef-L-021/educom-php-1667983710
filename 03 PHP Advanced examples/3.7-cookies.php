<?php
$cookie_name= "user";
$cookie_value= "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 *30), "/");      // 86400 = 1 day. De setcookie function MUST appear before the <html> tag

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "cookie '" . $cookie_name . "' is set! <br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>

<!-- Modify cookie -->                                                  <!-- Just copy the setcookie function -->

<?php
$cookie_name= "user";
$cookie_value= "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 *30), "/");      // 86400 = 1 day. De setcookie function MUST appear before the <html> tag

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "cookie '" . $cookie_name . "' is set! <br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
</body>
</html>

<!-- Delete cookie -->

<?php
setcookie("user", "", time() - 3600);
?>

<html>
<body>

<?php
echo "Cookie 'user' is deleted";
?>

</body>
</html>

<!-- Check if Cookies are Enabled -->

<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php 
if(count($_COOKIE) > 0) {
    echo "cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}

?>

</body>
</html>