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

public function SetAge($newAge) {
if ($newAge > 17) { 
return $this->age = $newAge;    
    }
return "Вам еще рано работать в нашей компании";
}

public function CheckAge($age) {
if ($age > 17) {
return true;    
    }
return false;
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
echo $secondWorker->CheckAge($secondWorker->GetAge());
