<?php
class BalukhWorkers 
{
private $name;
private $age;
private $salary;

public function __construct($name, $age, $salary) {
$this->name = $name;
$this->age = $age;
$this->salary = $salary;

    }
}

$firstWorker = new BalukhWorker("Vasya", 22, 180.000);
$secondWorker = new BalukhWorker("Katya", 19. 60.000);
