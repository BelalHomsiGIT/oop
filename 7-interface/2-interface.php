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
        // interface Car
        interface Car { 
            public function setModel($name);
            
            public function getModel();
        }

        // inteface Vehicle
        interface Vehicle {
            public function setHasWheels($bool); 
           
            public function getHasWheels();
        }

        //We can implement a number of interfaces in the same class.
        class miniCar implements Car, Vehicle {
            private $model; 
            private $hasWheels; 
            private $color;
            
            public function setColor($color){ 
                $this -> color = $color; 
            }
            public function getColor(){
                return $this -> color; 
            }

            public function setModel($name){ 
                $this -> model = $name; 
            }

            public function getModel(){
                return $this -> model; 
            }
            
            public function setHasWheels($bool){ 
                $this -> hasWheels = $bool; 
            }
            public function getHasWheels(){
                return ($this -> hasWheels)? "has wheels" : "no wheels";
            }
          }

          $audi = new miniCar;
          $audi->setModel("X5-2011");
          $audi->setHasWheels(1);
          $audi->setColor("Red");

          echo $audi->getModel();
          echo"<br>";
          echo $audi->getHasWheels();
          echo"<br>";
          echo $audi->getColor();
    ?>
</body>
</html>