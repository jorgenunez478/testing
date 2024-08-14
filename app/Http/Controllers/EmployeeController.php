<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'age' => 'required|numeric',
            'gender' => 'required',
            'email' => 'required',
            'position' => 'required',
        ]);

        
        Employee::create($request->all());

        return redirect()->route('employee.index')
            ->with('success','Empleado creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|max:200',
            'age' => 'required|numeric',
            'gender' => 'required',
            'email' => 'required|string|email|max:255|unique:employees,email',
            'position' => 'required',
        ]);

        dd($request, $employee);
        $employee->update($request->all());

        return redirect()->route('employee.index')
            ->with('success','Empleado editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //$employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index')
            ->with('success', 'El empleado se elimino correctamente.');
    }
}
