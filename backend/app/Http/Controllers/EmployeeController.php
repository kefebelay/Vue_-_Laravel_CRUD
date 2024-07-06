<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employee;
    public function __construct(){
        $this->employee = new Employee();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{

        return response()->json($this->employee->all(), 200);

        }
        catch(\Exception $e){

            return response()->json(['error' => $e], 500);

        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
