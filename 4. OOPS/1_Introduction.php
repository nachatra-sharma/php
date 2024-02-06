<?php

// ==================================== classes and objects ============================

class Calculation
{
    public $a, $b, $c;

    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new Calculation;

$c1->a = 10;
$c1->b = 20;

echo $c1->sum() . "\n"; // 30


$c2 = new Calculation;

$c2->a = 100;
$c2->b = 50;

echo $c2->sub() . "\n"; // 50


// ======================== Constructor =============================

// show name

class showInfo
{
    public $name, $age;

    function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }

    function greet()
    {
        $this->name;
        $this->age;
        return "Your name is " . $this->name . " and you're " . $this->age . " years old.";
    }
}

$show = new showInfo("Rishi", 21);

echo $show->greet();

// ===================== Inheritance =============================

class Employee
{
    public $name, $salary, $age;
    function __construct($name, $salary, $age)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->age = $age;
    }

    function info()
    {
        echo "<h2>Employee Information</h2>";
        echo "Employee Name = " . $this->name . '<br>';
        echo "Employee Salary = " . $this->salary . '<br>';
        echo "Employee Age = " . $this->age . '<br>';
    }
}

class Manager extends Employee
{
    public $ta = 1000;
    public $phone = 300;
    public $totalSalary;

    function info()
    {
        $this->totalSalary = $this->ta + $this->phone + $this->salary;
        echo "<h2>Manager Information</h2>";
        echo "Manager Name = " . $this->name . "<br>";
        echo "Manager Salary = " . $this->totalSalary . "<br>";
        echo "Manager Age = " . $this->age . "<br>";
    }

}

$e1 = new Employee("Rahul", 100000, 21);
$e1->info();

$e2 = new Manager("Rishi", 500000, 21);
$e2->info();