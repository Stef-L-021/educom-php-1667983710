<?php

/*
Namespaces are qualifiers that solve two different problems:
1.  They allow for better organization by grouping classes that work together to perform a task
2.  They allow the same name to be used for more than one class
*/

namespace Html;     // Note: A namespace declaration must be the first thing in the PHP file.
class Table {
    public $title = "";
    public $numrows = 0;
    public function message() {
        echo "<p> Table '{$this->title}' has {$this->numRows} rows. </p>";
    }
}
$table = new Table();               // Voeg een nieuwe variable toe aan de table
$table->title = "My table";         // voeg 2 nieuwe onderdelen toe aan die vorige variable.
$table->numRows = 5;

?> 

<DOCTYPE html>
<html>
<body>

<?php
$table->message();          // voer public function message uit met de variable table als invoer
?>
</body>

<?php
$table = new Html\Table2();
$row = new HTML\Row2();

namespace Html3;                // Bij meerdere variables kan je het beter bovenaan doen
$table = new Table();
$row = new Row();

// Giving a namespace an Alias

use Html as H;
$table = new H\Table();

// Giving a class an Alias
use Html\Table as T;
$table = new T();

?>