<?php
namespace EmployeeManagementSystem;

use EmployeeManagementSystem\Traits\Taxable;

class ContractEmployee extends Employee
{
    use Taxable;

    public function calculateSalary()
    {
        // Misalkan gaji kontrak lebih kecil dengan pajak tambahan
        return ($this->salary - $this->calculateTax($this->salary)) * 0.9;
}
}