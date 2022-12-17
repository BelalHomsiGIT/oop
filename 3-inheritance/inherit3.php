<?php

class Test1 {
    private $name = "Belal";
    protected $last = "Homsi"; // protected = private in the class
    public $oop = "in OOP";
    
    //To reach the private and protected properties, we use a public methods as set/get
    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    function setLast($last){
        $this->last = $last;
    }
    function getLast(){
        return $this->last;
    }

    //another methods

    private function hello(){
        return "Hello";
    }
    protected function bye(){
        return "Bye";
    }
    public function getAll(){
        $v1 = $this->hello();
        $v2 = $this->bye();
        return "$v1 $this->name $this->last $this->oop ,,, $v2";
    }

}
    echo "object1 from Test1 class <br>";
    echo "------------------------------ <br>";
    $object1 = new Test1;
     echo $object1 -> oop;       // in OOP
    echo "<br>"; 
    echo $object1 -> getAll();  // Hello Belal Homsi in OOP ,,, Bye
    echo "<br>"; 

    $object1->setName('Adnaaaan');
    $object1->setLast('Brrrrrr');
    $object1->oop = "Object Oriented Programming.";

    echo $object1->getName() . " " . $object1->getLast();  // Adnaaaan Brrrrrr
    echo "<br>"; 
    echo $object1 -> getAll();  // Hello Adnaaaan Brrrrrr Object Oriented Programming. ,,, Bye
    
    echo "<br>"; 
    echo "<br>======================================== <br><br>";
    
    //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    // Inheritance:
    //-------------
    // Test2 class inherit Test2 (all protected and public members, but not the private one).
    // Test2 not inheritaned name property because it private in Test1.
    // Test2 inheritaned last property because it protected in Test1 and became private in Test2.
    // Test2 inheritaned oop property because it public in Test1 and became public in  Test2.
    // Test2 not inheritaned hello method because it private in Test1.
    // Test2 inheritaned bye method because it protected in Test1 and became private in Test2.
    // Test2 inheritaned getAll method because it public in Test1 and became public in Test2.

    class Test2 extends Test1 {
        private $h1 = "Hello One - Test2";
        public $h2 = "Hello Tow - Test2";

        function get1(){
            return "$this->h1 ,, $this->h2";
        }
        function get2(){
            //we cann't reach: name, hello(), because it private in Test1
            //but we can with last and bye() because it's protected in Test1
            //so it become a private in Test2
            return $this->h1 . " / " . $this->last . " / " . $this->bye();
        }
    }
    echo "object2 from Test2 class <br>";
    echo "------------------------------ <br>";
    $object2 = new Test2;

    // echo $object2->h1;       // Fatal Error
    echo $object2->h2;          // Hello Tow - Test2
    echo "<br>";

    echo $object2->get1();       // Hello One - Test2 ,, Hello Tow - Test2
    echo "<br>";

    echo $object2->get2();      // Hello One - Test2 / Homsi / Bye
    echo "<br>";
    
    echo $object2->oop;         // in OOP
    echo "<br>";
    
    echo $object2->getAll();    // Hello Belal Homsi in OOP ,,, Bye
    echo "<br>";
    
    echo "<br>======================================== <br><br>";
    // Now, all private members in Test1 which it unvisible in Test2, we can reach it
    // if the Test1 have a public methods get it:
    echo "Reach The Unvisible members in Test1 using the public methods in it, wiht obbject from Test2<br>";
    echo "------------------------------------------------------------------------------------------------------------<br>";
    echo $object2->getName();  // Belal
    echo "<br>";
    $object2->setName("Saaaaaami");
    $object2->setLast("Kerrrrrrrrrr");
    $object2->oop = "Programmin in OOP";
    echo $object2->getAll();  // Hello Saaaaaami Kerrrrrrrrrr Programmin in OOP ,,, Bye

    /* So:
        Test2 inherit everythings is public and protected from Test1
        private members in Test1 can be reached in Test2 if was Test1 has
        a public methods which reach these unvisible members.

    */

?>