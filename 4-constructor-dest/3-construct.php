<?php
    class Person {
        protected $fname;
        protected $lname;
        protected $as = "Student";

        function __construct($fname, $lname){
            echo "'Constructor from Person class.' <br>";
            $this->fname = $fname;
            $this->lname = $lname;
        }

        function setFName($fname){
            $this->fname=$fname;
        }
        function getFName(){
            return $this->fname;
        }
        function setLName($lname){
            $this->lname=$lname;
        }
        function getLName(){
            return $this->lname;
        }
        function setAs($as){
            $this->as=$as;
        }
        function getAs(){
            return $this->as;
        }

        function getData(){
            return "$this->fname $this->lname As $this->as";
        }
    }

    $stu1 = new Person("Mazen", "Karkar");
    echo $stu1->getData();  // Mazen Karkar As Student
    echo "<br>";
    echo "<br>";

    class Trainer extends Person {
        private $job;
        private $time;

        function setJob($job){
            $this->job = $job;
        }
        function getJob(){
            return $this->job;
        }
        function setTime($time){
            $this->time = $time;
        }
        function getTime(){
            return $this->time;
        }

        function getAllData(){
            return "$this->fname $this->lname As $this->as - Job: $this->job - Time: $this->time";
        }
    }

    /*
    $tech1 = new Trainer();
    /// Fatal error: Uncaught ArgumentCountError: Too few arguments to function Person::__construct(), 0 passed
    */
    // Trainer inheritened the all protected properties and the constructor function from Person.
    $tech1 = new Trainer("Belal", "Homsi");
    echo $tech1->getData();  // Belal Homsi As Student
    echo "<br>";
    $tech1->setAs("Developer");
    $tech1->setJob("PHP");
    $tech1->setTime("Part Time");
    echo $tech1->getData();  // Belal Homsi As Developer
    echo "<br>";
    echo $tech1->getAllData();  // Belal Homsi As Developer - Job: PHP - Time: Part Time

?>