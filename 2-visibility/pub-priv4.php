<?php
    /* There are three access modifiers:
         public - the property or method can be accessed from everywhere. This is default
         protected - the property or method can be accessed within the class and by classes derived from that class
         private - the property or method can ONLY be accessed within the class
    */
    class Test1 {
        private $name = "Belal";
        protected $last = "Homsi"; // protected = private in the class
        public $oop = "in OOP";

        private function hello(){
            return "Hello";
        }

        public function getAll(){
            $v = $this->hello();
            return "$v $this->name $this->last $this->oop";
        }
    }
    
    $object = new Test1;
    // echo $object -> name;  // Fatal error: Uncaught Error: Cannot access private property Test1::$name
    // echo $object -> last;  // Fatal error: Uncaught Error: Cannot access protected property Test1::$last
    echo $object -> oop;  // in OOP
    echo "<br>";
    $object -> oop = "Change OOP";
    echo $object -> oop;  // Change OOP
    echo "<br>";
    echo $object -> getAll();  // Hello Belal Homsi Change OOP

?>