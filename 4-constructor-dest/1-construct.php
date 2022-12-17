<?php

    class Person {
        private $fname;
        private $lname;
        private $email;
        private $age;

        // A constructor allows you to initialize an object's properties upon creation of the object.
        function __construct($theFName, $theLName){
            echo "'Constructor from Person class.' <br>";
            $this -> fname = $theFName;
            $this -> lname = $theLName;
        }

        function setFName($theFName){
            $this -> fname = $theFName;
        }
        function getFName(){
            return $this -> fname;
        }

        function setLName($theLName){
            $this -> lname = $theLName;
        }
        function getLName(){
            return $this -> lname;
        }

        function setEmail($theEmail){
            $this -> email = $theEmail;
        }
        function getEmail(){
            return $this -> email;
        }

        function setAge($theAge){
            $this -> age = $theAge;
        }
        function getAge(){
            return $this -> age;
        }
    }

    $trainer = new Person("Belal", "Homsi");
    echo $trainer->getFName();  // Belal
    echo "<br>";
    echo $trainer->getLName();  // Homsi
    $trainer->setAge(50);
    echo "<br>";
    echo $trainer->getAge();    // 50
?>