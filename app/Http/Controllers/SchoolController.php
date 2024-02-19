<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        return view('school.index');
    }
    public function about()
    {
        return view('school.about');
    }
    public function classes()
    {
        return view('school.classes');
    }
    public function facility()
    {
        return view('school.facility');
    }
    public function teacher()
    {
        return view('school.teacher');
    }
    public function becometeacher()
    {
        return view('school.become_teacher');
    }
    public function appointment()
    {
        return view('school.appointment');
    }
    public function testimonial()
    {
        return view('school.testimonial');
    }
    public function error()
    {
        return view('school.404');
    }
    public function contact()
    {
        return view('school.contact');
    }
}
