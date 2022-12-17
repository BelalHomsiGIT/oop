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

        function __destruct(){
            echo "Destructor sya Bye Mr. $this->fname <br>";
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

   
?>