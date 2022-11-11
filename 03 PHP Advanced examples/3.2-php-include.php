<html>
<body>

<!-- Example 1 -->

<h1> Welcome to my home page! </h1>
<p> Some text. </p>
<p> Some more text. </p>
<?php include 'footer.php';?>               <!-- of je hier nu require of include hebt staan. wat er voor staat laad toch -->

<!-- Example 2 -->

<div class="menu">
<?php include 'menu.php';?>
</div>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>

<!-- Example 3 -->

<h1>Welcome to my home page!</h1>
<?php include 'vars.php';
echo "I have a $color $car.";
?>

<!-- Include vs require -->

<h1>Welcome to my home page!</h1>
<?php require 'noFileExists.php';               // Bij include gaat tie verder met de echo, bij require niet
echo "I have a $color $car.";
?>

</body>
</html>