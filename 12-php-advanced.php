
<!-- Exercise 1: Include: Write a correct syntax to include a file named "footer.php". -->

<?php include 'footer.php';?>

<!-- Exercise 2: File Handling: Assume we have a file named "webdict.txt", write the correct syntax to open and read the file content. -->
<?php 

echo readfile("webdict.txt");

// Exercise 3: Open a file, and write the correct syntax to output one character at the time, until end-of-file. 

$myfile = fopen("webdict.txt", "r");
while(!feof($myfile)) {
  echo fgetc($myfile);
}

// Exercise 4: cookies: Create a cookie named "username".

setcookie("username", "John", time() + (86400 * 30), "/");

// Exercise 5: Create a session variable named "favcolor".

session_start();
$_SESSION["favcolor"] = "green";

// Exercise 6: Output the value of the session variable "favcolor".

echo $_SESSION["favcolor"];

?>