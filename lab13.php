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

public function SetAge($newAge) {
return $this->age = $newAge;    
    }

public function GetSalary($otherWorker = null) {
if ($otherWorker === null) {
return $this->salary;
    }

return $this->salary + $otherWorker->salary;
    }
}


$firstWorker = new BalukhWorker("Vasya", 22, 180000);
$secondWorker = new BalukhWorker("Katya", 19, 60000);

echo $firstWorker->GetSalary() . " - зарплата первого работника <br>";
echo $firstWorker->GetSalary($secondWorker) . " - сумма зарплат работников <br>";
echo $secondWorker->SetAge(20) . " - новый возраст пользователя <br>";
