<?php
class BalukhWorker 
{
public $name;
public $age;
public $salary;

public function __construct($name, $age, $salary) {
$this->name = $name;
$this->age = $age;
$this->salary = $salary;

    }
}

$firstWorker = new BalukhWorker("Vasya", 22, 180000);
$secondWorker = new BalukhWorker("Katya", 19, 60000);

echo $firstWorker->salary + $secondWorker->salary . " - Сумма зарплат <br>";
echo $firstWorker->age + $secondWorker->age . " - Сумма возрастов <br>";
