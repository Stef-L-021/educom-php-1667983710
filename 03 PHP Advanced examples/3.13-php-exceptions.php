<?php

function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

try {                                   // code that can throw exceptions
    echo divide(5, 0);
} catch(Exception $e) {                 // code that runs when an exception is caught
    echo "Unable to divide";
/*
} finally {
    echo "Process complete.";
*/
}

echo "<br>";

try {
    echo divide(5,0);
} catch(Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex -> getFile();
    $line= $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code] $message";
}





?>