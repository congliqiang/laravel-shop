<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student as StudentModel;

class StudentController extends Controller
{
    public function index(){
        $student = StudentModel::all();
        return view('student', ['students' => $student]);
    }
}
