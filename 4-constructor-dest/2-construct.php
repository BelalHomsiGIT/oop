<?php

    class Person {
        private $fname;
        private $lname;
        private $email;
        private $age;

        //we can make default value:
        function __construct($theFName = "Trainer", $theLName = "Trainer"){
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

    $per1 = new Person();
    echo $per1->getFName();     // Trainer
    echo "<br>";
    echo $per1->getLName();     // Trainer
    $per1->setAge(25);
    echo "<br>";
    echo $per1->getAge();       // 25
    echo "<br>";
    echo "<br>";
    
    $per2 = new Person("Belal", "Homsi");
    echo $per2->getFName();     //Belal
    echo "<br>";
    echo $per2->getLName();     // Homsi
    $per2->setAge(50);
    echo "<br>";
    echo $per2->getAge();       // 50
?>