<?php
require_once dirname(__FILE__) .  '/src/traits/Taxable.php';
require_once dirname(__FILE__) . '/src/Employee.php';
require_once dirname(__FILE__) . '/src/PermanentEmployee.php';
require_once dirname(__FILE__) . '/src/ContractEmployee.php';
require_once dirname(__FILE__) . '/src/HRDepartment.php';

use EmployeeManagementSystem\PermanentEmployee;
use EmployeeManagementSystem\ContractEmployee;
use EmployeeManagementSystem\HRDepartment;

// Membuat instance HRDepartment
$hr = new HRDepartment();

// Menambahkan karyawan tetap
$employee1 = new PermanentEmployee("Alice", "Manager", 5000);
$hr->addEmployee($employee1);

// Menambahkan karyawan kontrak
$employee2 = new ContractEmployee("Bob", "Developer", 4000);
$hr->addEmployee($employee2);

// Menambahkan 3 karyawan tambahan
$employee3 = new PermanentEmployee("Charlie", "Designer", 4500);
$hr->addEmployee($employee3);

$employee4 = new ContractEmployee("David", "Marketing Specialist", 3500);
$hr->addEmployee($employee4);

$employee5 = new PermanentEmployee("Eve", "Data Scientist", 6000);
$hr->addEmployee($employee5);

// Menampilkan daftar karyawan
$hr->showEmployees();
