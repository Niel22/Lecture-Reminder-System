<?php

namespace App\Http\Controllers;

use App\Models\LectureReminder;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index(){
        return view('frontend.lecture.index');
    }

    public function create(){
        return view('frontend.lecture.create');
    }

    public function edit($id){


        return view('frontend.lecture.edit', compact('id'));
    }

    public function show($id){

        return view('frontend.lecture.view', compact('id'));
    }
}
