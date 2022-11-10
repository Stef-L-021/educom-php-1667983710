<!-- Exercise 1: If the form in the white section below gets submitted, how can you, in welcome.php, output the value from the "first name" field? -->
<html>
<body>

<form action="welcome.php" method="get">
First name: <input type="text" name="fname">
</form>

Welcome 
<?php echo $_GET["fname"]; ?>

</body>
</html>


<!-- Exercise 2: -->

<html>
<body>

<form action="welcome.php" method="post">
First name: <input type="text" name="fname">
</form>

Welcome <?php echo $_POST["fname"]; ?>

</body>
</html>