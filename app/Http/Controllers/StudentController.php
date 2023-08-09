<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
      
   
        return view('students.index');
    }

    public function show($id)
    {
        $data = Students::findOrFail($id);
   
        return view('students.index', ['students' => $data]);
    }
}
