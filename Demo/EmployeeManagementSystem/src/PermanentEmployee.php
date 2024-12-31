<?php
namespace EmployeeManagementSystem;

use EmployeeManagementSystem\Traits\Taxable;

class PermanentEmployee extends Employee
{
    use Taxable;

    public function calculateSalary()
    {
        // Misalkan gaji tetap tanpa tambahan
        return $this->salary - $this->calculateTax($this->salary);
}
}