<?php
    
    // DEFINE CLASS
    // with parantathes or without, 
    // but it's neccesary when the constructor found in the class
    class MyClass {
        // Properties & Methods goes here
    }

    $myObject1 = new MyClass; // create object
    // echo $myObject1; // error
    var_dump($myObject1); // object(MyClass)#1 (0) { } -- it's empty
    echo "<br>";
    
    $myObject2 = new MyClass(); // create object
    // echo $myObject2; // error
    var_dump($myObject2); // object(MyClass)#2 (0) { } -- it's empty
?>