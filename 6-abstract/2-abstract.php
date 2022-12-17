<?Php
/*
    PHP has abstract classes and methods.
    Classes defined as abstract cannot be instantiated,
    and any class that contains at least one abstract method must also be abstract.
    Methods defined as abstract simply declare the method's signature;
    they cannot define the implementation.
*/

    // Cannot instantiate abstract class:
    // $testObj = new ParentTest; // Fatal error: Uncaught Error: Cannot instantiate abstract class ParentTes

/*
    When inheriting from an abstract class,
    all methods marked abstract in the parent's class declaration must be defined by the child class,
    and follow the usual inheritance and signature compatibility rules.
*/


/* When a child class is inherited from an abstract class, we have the following rules:
    The child class method must be defined with the same name and it redeclares the parent abstract method
    The child class method must be defined with the same or a less restricted access modifier
    The number of required arguments must be the same. However, the child class may have optional arguments in addition
*/
    // Parent class
    abstract class Car {
        public $name;
        public function __construct($name) {
        $this->name = $name;
        }
        abstract public function intro() : string;
    }
    
    // Child classes
    class Audi extends Car {
        public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
        }
    }
    
    class Volvo extends Car {
        public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
        }
    }
    
    class Citroen extends Car {
        public function intro() : string {
        return "French extravagance! I'm a $this->name!";
        }
    }
    
    // Create objects from the child classes
    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";
    
    $volvo = new volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";
    
    $citroen = new citroen("Citroen");
    echo $citroen->intro();
?>