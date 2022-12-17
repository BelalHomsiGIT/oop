<?php
    class Fruit{
        private $name;
        private $color;

        public static $taste = "delicious";
        private static $funny = "funny";

        function setName($name){
            $this->name=$name;
        }
        function getName(){
            return $this->name;
        }
        function setColor($color){
            $this->color=$color;
        }
        function getColor(){
            return $this->color;
        }
        
        static function hello(){
            return "Hello World!";
        }

        function all(){
            $v = self::hello();
            return "$v , $this->name is $this->color, it's " . self::$taste . " and " . self::$funny;
        }

    }

    // echo Fruit::$funny; //Fatal error: Uncaught Error: Cannot access private property Fruit::$funny
    echo Fruit::$taste;  // delicious
    echo"<br>";
    echo Fruit::hello();  // Hello World!
    echo"<br>";
    
    $Apple = new Fruit;
    $Apple->setName("Apple");
    $Apple->setColor("Red");
    echo $Apple->all(); // Hello World! , Apple is Red, it's delicious and funny
    echo"<br>";

?>