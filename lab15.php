<?php
abstract class Figure {
    protected $area;
    protected $color;
    protected $count_sides;

    public function getArea() { 		
    return $this->area; 		
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

class Rectangle extends Figure implements Area {
private $a;
private $b;

public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
        $this->count_sides = 4;
    }

public function getArea() {
    $this->area = $this->a * $this->b;
        return $this->area;
}

public function infoAbout() {
    return "Это прямоугольник. У него {$this->count_sides} стороны.";
    }
}

class Triangle extends Figure implements Area {

private $a;
private $b;
private $c;

 public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->count_sides = 3;
    }

public function getArea() {
$p = ($this->a + $this->b + $this->c) / 2; 
        $this->area = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
        return $this->area;
}

public function infoAbout() {
return "Это треугольник. У него {$this->count_sides} стороны.";
    }
}

class Square extends Figure implements Area {
private $a;

public function __construct($a) {
        $this->a = $a;
        $this->count_sides = 4;
    }

public function getArea() {
    $this->area = pow($this->a, 2);
        return $this->area;
}
public function infoAbout() {
    return "Это квадрат. У него {$this->count_sides} стороны.";
    }
}

$r1 = new Rectangle(12, 5);
$r2 = new Rectangle(4, 8);

$s1 = new Square(25);
$s2 = new Square(12);

$t1 = new Triangle(3, 4, 5);
$t2 = new Triangle(6, 6, 6);

$figures = [$r1, $r2, $s1, $s2, $t1, $t2];

foreach ($figures as $figure) {
    echo $figure->infoAbout() . " ";
    echo "Площадь: " . $figure->getArea() . "<br>";
}
?>
