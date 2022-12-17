<?php

    class Test1 {
        private $name = "Belal";
        protected $last = "Homsi"; // protected = private in the class
        public $oop = "in OOP";

        private function hello(){
            return "Hello";
        }
        
        protected function bye(){
            return "Bye";
        }

        public function getAll(){
            $v1 = $this->hello();
            $v2 = $this->bye();
            return "$v1 $this->name $this->last $this->oop ,,, $v2";
        }
    }
    echo "object1 from Test1 class <br>";
    echo "------------------------------ <br>";
    $object1 = new Test1;
    echo $object1 -> oop;       // in OOP
    echo "<br>";
    echo $object1 -> getAll();  // Hello Belal Homsi in OOP ,,, Bye
    echo "<br>=========================== <br><br>";
    
    //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    // Inheritance:
    //-------------
    // Test2 class inherit Test2 (all protected and public members, but not the private one).
    // Test2 not inheritaned name property because it private in Test1.
    // Test2 inheritaned last property because it protected in Test1 and became private in Test2.
    // Test2 inheritaned oop property because it public in Test1 and became public in  Test2.
    // Test2 not inheritaned hello method because it private in Test1.
    // Test2 inheritaned bye method because it protected in Test1 and became private in Test2.
    // Test2 inheritaned getAll method because it public in Test1 and became public in Test2.

    class Test2 extends Test1 {
        private $h1 = "Hello One";
        public $h2 = "Hello Tow";
        public function get(){
            return "$this->h1 ,, $this->h2 .";
        }
        public function test(){
            return $this->h1 . " / " . $this->bye();
        }
    }
    echo "object2 from Test2 class <br>";
    echo "------------------------------ <br>";
    $object2 = new Test2;
    // echo $object2->h1;       // Fatal Error
    echo $object2->h2;          // Hello Tow
    echo "<br>";
    echo $object2->get();       // Hello One ,, Hello Tow .
    echo "<br>";
    echo $object2->test();      // Hello One / Bye
    echo "<br>";
    
    // the inheritaned members from Test1:
    echo $object2->oop;         // in OOP
    echo "<br>";
    echo $object2->getAll();    // Hello Belal Homsi in OOP ,,, Bye
    

?>