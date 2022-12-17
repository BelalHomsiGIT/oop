<?php
    class Person {
        protected $fname;
        protected $lname;

        //A class constant is declared inside a class with the const keyword:
        const GREETINMsg = "Hello User ";
        const LEAVINGMsg = "Good bye User ";

        // we can access a constant from inside the class by using the self keyword 
        // followed by the scope resolution operator (::) followed by the constant name:
        function __construct(){
            echo self::GREETINMsg . "<br>";
        }
        function hello(){
            return self::GREETINMsg . $this->fname;
        }
        function bye(){
            return self::LEAVINGMsg . $this->fname;
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
    }
    // We can access a constant from outside the class by using the class name followed
    // by the scope resolution operator (::) followed by the constant name
    echo Person::GREETINMsg;    // Hello User
    echo "<br>";
    echo Person::LEAVINGMsg;    // Good bye User
    echo "<br>";
    echo "<br>";
    
    echo "New Object from Person <br>";
    $person1 = new Person;  // Hello User
    $person1->setFName("Adnan");
    echo $person1->hello(); // Hello User Adnan
    echo "<br>";
    echo $person1->bye();   // Good bye User Adnan

?>