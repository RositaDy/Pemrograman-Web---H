<?php
namespace EmployeeManagementSystem\Traits;

trait Taxable
{
    public function calculateTax($salary)
    {
        // Misalkan pajak penghasilan adalah 10% dari gaji
        return $salary * 0.10;
}
}