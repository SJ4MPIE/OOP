<?php 
    class Car {

        //These are properties. Remember to use the keyword "var".
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;
        var $color = "Red";

        //The __construct method will run everytime when a instance of a class is created.
        function __construct(){
            echo $this->wheels."</br>";
        }

        //This becomes a method.
        function MoveWheels(){
            echo "Wheels move </br>";
        }
        
        //$this refers to the class Car 
        //Whenever you wanna reference to the car INSIDE the class use $this.
        function changeColor(){
            $this->color = "Blue";
            echo  $this->color. "</br>";
        }


    }
    //Checks if class  exists by using a predefined php function.
    if(class_exists("Car")){
        echo "class exists. </br>";
    }
    
    else {
        echo "Class doesn't exist </br>";
    }

    //Checks if method exists by using a predefined php function.
    if(method_exists("Car", "MoveWheels")){
        echo "Method exist. </br>";
    }
    else {
        echo "Method doesn't exist.";
    }

    //Creating an instance of class Car. 
    $bmw = new Car();
    $truck = new Car();
    $bmw->MoveWheels();
    $truck->MoveWheels();

    //When you call a propery out of a object you dont use the dollar-sign.
    $bmw->doors = 5;
    echo $bmw->wheels. "</br>";

    $bmw->changeColor();

    //Truck devaite from the class because it changes the value of wheels to 10.
    $truck->wheels = 10;
    echo $bmw->wheels. "</br>"; 
    echo $truck->wheels. "</br>";

    //By using the extends keyword the plane class will inherit the Car class.
    class Plane extends Car {
        //This will overwrite parent class Car.
        var $wheels = 20;
        //Public can be used anywhere in the code.
        public $wings = 2;
        //Private can only be used inside the class.
        private $computer = 2;
        //Protected can only be used inside the class or extended class.
        protected $radio = 1;
    }

    //This will work because Plane extends Car this way it makes it possible to perform or access properties or methods.
    $jet = new Plane();
    $jet->MoveWheels();

    echo $jet->wings. "</br>";
    echo $jet->computer. "</br>";
    echo $jet->radio. "</br>";
?>