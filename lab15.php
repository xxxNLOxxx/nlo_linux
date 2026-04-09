<?php
abstract class Figure {
    private $square;
    private $color;
    private $count_sides;

    public function getSquare() { 		
    return $this->square; 		
    } 		 		
    public function setSquare($square)  { 		
	    $this->square = $square; 		
    } 		 		

    public function getColor() { 		
    return $this->color; 		
    } 		 		
    public function setColor($color)  { 		
	    $this->color = $color; 		
    } 		 		

    public function getCount_sides() { 		
    return $this->count_sides; 		
    } 		 		
    public function setName($count_sides)  { 		
	    $this->count_sides = $count_sides; 		
    } 		 		

    abstract public function infoAbout($value); 
}

public class Rectangle {
}

public class Triangle {
}

public class Square {
}


?>
