<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Class</title>
    <base target="_blank"> 
    <style>
        a{
            display: block;
            line-height: 25px;
            font-size: 20px;
            font-style: italic;
            text-decoration: none;
            margin: 20px;

        }
    </style>
</head>
<body>
    <h2>Abstract Class</h2>
    <a href="https://www.w3schools.com/php/php_oop_classes_abstract.asp">W3S - php_oop_classes_abstract</a>
    <a href="https://www.phptutorial.net/php-oop/php-abstract-class/">phptutorial - php-oop/php-abstract-class</a>
    <a href="https://www.php.net/manual/en/language.oop5.abstract.php">php.ne - oop5.abstract</a>
    <hr>
</body>
</html>
<?Php
/*
    PHP has abstract classes and methods.
    Classes defined as abstract cannot be instantiated,
    and any class that contains at least one abstract method must also be abstract.
    Methods defined as abstract simply declare the method's signature;
    they cannot define the implementation.
*/
    abstract class ParentTest{
        // Force Extending class to define this method
        abstract protected function getValue();
        abstract protected function prefixValue($prefix);

        // Common method
        public function printOut() {
            print $this->getValue() . "\n";
        }
    }

    // Cannot instantiate abstract class:
    // $testObj = new ParentTest; // Fatal error: Uncaught Error: Cannot instantiate abstract class ParentTes

/*
    When inheriting from an abstract class,
    all methods marked abstract in the parent's class declaration must be defined by the child class,
    and follow the usual inheritance and signature compatibility rules.
*/
    class Child1 extends ParentTest{
        protected function getValue() {
            return "Child1-Object";
        }
        public function prefixValue($prefix) {
            return "{$prefix}Hello-One";
        }
    }

    class Child2 extends ParentTest{
        public function getValue() {
            return "Another-Object";
        }
        public function prefixValue($prefix) {
            return "{$prefix}Hello-Tow";
        }
    }
    $obj1 = new Child1;
    $obj1->printOut();
    echo $obj1->prefixValue('FOO_') ."<br>";
    echo"<br>";
    
    $obj2 = new Child2;
    $obj2->printOut();
    echo $obj2->prefixValue('FOO_') ."<br>";
?>