<?php
namespace EmployeeManagementSystem;

class HRDepartment
{
    private $employees = [];

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function showEmployees()
    {
        foreach ($this->employees as $employee) {
            $employee(); // Memanggil __invoke() untuk menampilkan informasi karyawan
            echo "Net Salary: " . $employee->calculateSalary() . "\n";
            echo "-----------------------------\n";
 }
}
}