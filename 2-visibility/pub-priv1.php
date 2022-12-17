<?php
    class Test1 {
        public $name = "Belal";
    }

    $object = new Test1;
    // we can reach the public property by object
    echo $object -> name; // Belal
    echo "<br>";

    // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    class Test3 {
        private $name = "Belal";
        public function getName(){
            return $this -> name;
        }
    }
    $object = new Test3;
    // we can reach the private property by public method
    echo $object -> getName();  // Belal

    // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    class Test2 {
        private $name = "Belal";
    }
    $object = new Test2;
    // we cann't reach the private property directly
    echo $object -> name; // Fatal error
?>