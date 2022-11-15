<?php

// Static methods can be called directly - without creating an instance of the class first.
// Static methods are declared with the static keyword:

class greeting {
    public static function welcome() {
        echo "Hello World!";
    }
}

// call static method
greeting::welcome();        // To access a static method use the class name, double colon (::), and the method name:

// PHP more on static methods

class greeting2 {
    public static function welcome() {
        echo "Hello World2!";
    }

    public function __construct(){
        self::welcome();
    }
}
new greeting2();

// 3. Static methods can also be called from methods in other classes. 
// To do this, the static method should be public:

class greeting3 {
    public static function welcome() {
        echo "Hello World3!";
    }
}
class SomeOtherClass {
    public function message() {                     
        greeting3::welcome();                     // Je kan die static method zelfs aanroepen in andere methods in classes.
    }
}

// To call a static method from a child class, use the parent keyword inside the child class

class domain {
    protected static function getWebsiteName() {        // Here the static method can be public or protected
        return "W3Schools.com";
    }
}

class domainW3 extends domain {
    public $websiteName;
    public function __construct() {
        $this->websiteName = parent::getWebsiteName();
    }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;


?>