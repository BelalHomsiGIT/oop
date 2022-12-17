<?php

    /* so we can working with private properties/methods
       only in the class itself, not by any object (directly)..*/

    class Test1 {
        public $name = "Belal";
        private $greet = "hello";
        public function getGreet(){
            return $this -> greet;
        }
        private function testPrivMeth(){
            return "Private";
        }
    }


    
    $object = new Test1;
    echo $object -> getGreet();  // greet
    
    // we cann't reach the private property/method
    /* echo $object -> greet; // Fatal error
       echo $object -> testPrivMeth(); // Fatal error */

?>