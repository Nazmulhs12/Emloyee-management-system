<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Department;
use App\Division;
use App\Employee;
use App\State;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::with('countries','states','cities','departments','divisions')->get();
        //return $employees;
        return view('admin.employee.index',[
            'employees'=>$employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        $departments = Department::all();
        $divisions = Division::all();

        return view('admin.employee.create',[
            'countries'=>$countries,
            'states'=>$states,
            'cities'=>$cities,
            'departments'=>$departments,
            'divisions'=>$divisions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $images = $request->file('image');
//        $imageName = date('mdYHis').uniqid().$images->getClientOriginalName();
//        $directory = 'admin/images/';
//        $imageUrl = $directory.$imageName;
//        Image::make($images)->save($imageUrl);
//        return 'Success';

        $employee = new Employee();
        $employee->employee_name=$request->employee_name;
        $employee->countries_name=$request->countries_name;
        $employee->states_name=$request->states_name;
        $employee->cities_name=$request->cities_name;
        $employee->zip_code=$request->zip_code;
        $employee->birthday=$request->birthday;
        $employee->join_date=$request->join_date;
        $employee->departments_name=$request->departments_name;
        $employee->divisions_name=$request->divisions_name;
        $employee->address=$request->address;
        //return $employee;
        $employee->save();
        return redirect('/employee');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
