<?php
class BalukhWorker 
{
private $name;
private $age;
private $salary;

public function __construct($name, $age, $salary) {
$this->name = $name;
$this->age = $age;
$this->salary = $salary;

    }

public function GetName() {
return $this->name;
    }

public function GetAge() {
return $this->age;    
    }

public function GetSalary() {
return $this->salary;
    }
}

$firstWorker = new BalukhWorker("Vasya", 22, 180000);
$secondWorker = new BalukhWorker("Katya", 19, 60000);

echo $firstWorker->GetSalary() . " - зарплата первого работника";


