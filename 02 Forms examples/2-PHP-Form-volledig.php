<!DOCTYPE HTML>  
<html>
<head>
<style> .error {color: #FF0000;} </style>
</head>
<body>

<?php

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["name"])) {                             // als de name leeg is:
        $nameErr = "Name is required";                      // geeft een error
    } else {                                                // anders;
        $name = test_input($_POST["name"]);                 // post het
        // check of de naam letter en wit ruimte heeft
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {                           // en voer dit nu uit voor alle variables en vervang sommige values
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check de formatting van de email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["website"])) {                           
        $website = "";                                        // Deze is iets anders omdat website niet moet
    } else {
        $webstite = test_input($_POST["website"]);
        // Check de url syntax formatting
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";    
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

} // Einde eerste if statement

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h2> PHP Form Validation Example </h2>
<p><span class="error">* required field </span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

Name:                                                                       <!-- tekst "Name -->
<input type ="text" name="name" value="<?php echo $name;?>">                <!-- Form button -->
<span class="error">* <?php echo $nameErr;?></span>                         <!-- Voegt een asterix toe -->
<br> <br>                                                                   <!-- Line breaks -->
E-Mail:                                                                     <!-- copy van name --> 
<input type ="text" name="email" value="<?php echo $email;?>">              <!-- Verander de name en err -->
<span class="error">* <?php echo $emailErr;?></span>             
<br> <br>  
Website:
<input type ="text" name="website" value="<?php echo $website;?>">                            
<span class="error"> <?php echo $websiteErr;?></span>             
<br> <br>  
Comment: 
<textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>   <!-- wtf is die placement van de php echo-->
<br> <br>
Gender:
<input type ="radio" name="gender" 
<?php if (isset($gender) && $gender=="female") echo "checked";?>                
value="female"> Female       

<input type ="radio" name="gender" 
<?php if (isset($gender) && $gender=="male") echo "checked";?>                
value="male"> Male                                                              <!--de line hievoor is om de values te laten staan in de cells. comments in de line hierboven werken niet omdat dit allemaal 1 line samen is right?-->

<input type ="radio" name="gender" 
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="female"> Other     

<span class="error">* <?php echo $genderErr;?></span>
<br> <br>

<input type="submit" name= "submit" value="Submit">

</form>

<?php 
echo "<h2> Your Input: </h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
?>

<body>
</html>