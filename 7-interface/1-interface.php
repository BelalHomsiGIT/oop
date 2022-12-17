<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Class</title>
    <base target="_blank"> 
    <style>
        a{
            display: block;
            line-height: 25px;
            font-size: 20px;
            font-style: italic;
            text-decoration: none;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h2>PHP OOP - Interfaces</h2>
        <a href="https://phpenthusiast.com/object-oriented-php-tutorials/interfaces">phpenthusiast - object-oriented-php-tutorials/interfaces</a>
        <a href="https://www.w3schools.com/php/php_oop_interfaces.asp">W3S - php_oop_interfaces</a>
        <a href="https://www.php.net/manual/en/language.oop5.interfaces.php">php.net - language.oop5.interfaces</a>
        <a href="https://tutorials.supunkavinda.blog/php/oop-interfaces">tutorials.supunkavinda.blog - php/oop-interfaces</a>
        <a href="https://www.zend.com/blog/what-interface-php">zend.com/blog - what-interface-php</a>
    <hr>
    <?php
    //Interfaces make it easy to use a variety of different classes in the same way.
    //When one or more classes use the same interface, it is referred to as "polymorphism".

    /*Interface are similar to abstract classes. The difference between interfaces and abstract classes are:
        * Interfaces cannot have properties, while abstract classes can.
        * All interface methods must be public, while abstract class methods is public or protected.
        * All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary.
        * Classes can implement an interface while inheriting from another class at the same time
    */

        //Interfaces are declared with the interface keyword:
        interface Animal {
            public function makeSound();
        }

        //To implement an interface, a class must use the implements keyword.
        //A class that implements an interface must implement all of the interface's methods.
        class Cat implements Animal {
            public function makeSound() {
              echo "Meow <br>";
            }
        }
        class Dog implements Animal {
            public function makeSound() {
              echo "Bark <br>";
            }
        }
          class Mouse implements Animal {
            public function makeSound() {
              echo "Squeak <br>";
            }
        }

        // Create a list of animals
        $cat = new Cat();
        $dog = new Dog();
        $mouse = new Mouse();
        $animals = array($cat, $dog, $mouse);

        // Tell the animals to make a sound
        foreach($animals as $animal) {
            $animal->makeSound();
        }
    ?>
</body>
</html>