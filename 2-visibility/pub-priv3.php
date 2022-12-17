<?php

    /* so we can working with private properties/methods
       only in the class itself, not by any object (directly)..*/

    class Test1 {
        private $name = "Belal";
        private $greet = "Hello";
        private function testPrivMeth(){
            return "OOP";
        }
        public function getAll(){
            $v = $this->testPrivMeth();
            return "$this->greet $this->name $v";
        }
    }
    
    $object = new Test1;
    echo $object -> getAll();


?>