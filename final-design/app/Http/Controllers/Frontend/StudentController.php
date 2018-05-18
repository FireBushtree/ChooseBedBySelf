<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * To show the ui of student's login
     */
    public function login()
    {
        return view('frontend.student.login');
    }
}
