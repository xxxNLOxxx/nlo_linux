<?php
abstract class Figure {
    protected $square;
    protected $color;
    protected $count_sides;

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

    abstract public function infoAbout(); 
}

interface Area {
    public function getArea();
}

public class Rectangle extends Figure implements Area {
private $a;
private $b;

public function getArea() {}
public function infoAbout() {}
}

public class Triangle extends Figure implements Area {
private $a;
private $b;
private $c;

public function getArea() {}
public function infoAbout() {}
}

public class Square extends Figure implements Area {
private $a;

public function getArea() {}
public function infoAbout() {}
}


?>
