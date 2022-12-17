<?php
    class MyClass {
        // Properties & Methods goes here
        public $info = "this is some info";
    }

    $myObject1 = new MyClass;
    var_dump($myObject1); // object(MyClass)#1 (1) { ["info"]=> string(17) "this is some info" }
    echo "<br>";
?>