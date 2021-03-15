<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use App\Models\Employee;
use Illuminate\Http\Request;
use Excel;

class EmployeeController extends Controller
{
    public function addEmployees() {
        $employees = [
            ["name" => "Alice", "email" => "alice@gmail.com", "phone" => "01717464638", "salary" => "30000" ,"department" =>  "Accounting"],
            ["name" => "Andrew", "email" => "andrew@gmail.com", "phone" => "01717464632", "salary" => "40000", "department" => "Management"],
            ["name" => "Jennifer", "email" => "jennifer@gmail.com", "phone" => "017174646111", "salary" => "40000", "department" => "Accounting"],
            ["name" => "Bravo", "email" => "bravo@gmail.com", "phone" => "017174646222", "salary" => "60000", "department" => "ICT"],
        ];
        Employee::insert($employees);

        return "Record Has Been inserted";
    }

    public function exportIntoExcel() 
    {
        return Excel::download(new EmployeeExport, 'employeelist.xlsx');
    }

    public function  exportIntoCsv()
    {
        return Excel::download(new EmployeeExport, 'employeelist.csv');

    }

    public function importForm() 
    {
        return view('import-form');
    }

    public function import(Request $req) 
    {
       Excel::import(new EmployeeImport, $req->file);
       return "Records are imported";
    }
}
