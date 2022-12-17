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
        //when the parent class has a constructor, the constructor of children must be has one contain all the parent one.
        function __construct($fname, $lname, $time){
            echo "'Constructor from Trainer class.' <br>";
            $this->fname = $fname;
            $this->lname = $lname;
            $this->time = $time;
        }

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
  
    // $tech1 = new Trainer("Belal", "Homsi");
    // echo $tech1->getData();  // Belal Homsi As Student
    // echo "<br>";
    // $tech1->setAs("Developer");
    // $tech1->setJob("PHP");
    // $tech1->setTime("Part Time");
    // echo $tech1->getData();  // Belal Homsi As Developer
    // echo "<br>";
    // echo $tech1->getAllData();  // Belal Homsi As Developer - Job: PHP - Time: Part Time
    // echo "<br>";
    
    $tech2 = new Trainer("Ahmad", "Mario", "Part");
    echo $tech2->getData();  // Belal Homsi As Student
    echo "<br>";
    echo $tech2->getAllData();  // Belal Homsi As Developer - Job: PHP - Time: Part Time

?>