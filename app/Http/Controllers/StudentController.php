<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::select('id','idnumber','firstname','middlename','lastname','email')->get();
        return view('student.view', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'idnumber' => 'required|max:20,unique:student',
            'firstname' => 'required|alpha|max:50',
            'middlename' => 'alpha|max:200',
            'lastname' => 'required|max:50',
            'email' => 'required|email|max:50',

        ]);
        Student::create([
            'idnumber'=>$validated['idnumber'],
            'firstname'=>$validated['firstname'],
            'middlename'=>$validated['middlename'],
            'lastname'=>$validated['lastname'],
            'email'=>$validated['email'],

        ]);

        return redirect()->to('/student')->with('success', 'Student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
