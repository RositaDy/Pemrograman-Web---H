<?php
namespace EmployeeManagementSystem;

abstract class Employee
{
    protected $name;
    protected $position;
    protected $salary;

    public function __construct($name, $position, $salary)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    abstract public function calculateSalary();

    public function __invoke()
    {
        echo "Name: {$this->name}, Position: {$this->position}, Salary: {$this->salary}\n";
}
}
