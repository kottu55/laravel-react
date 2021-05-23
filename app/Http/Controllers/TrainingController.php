<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        return view('trainingNote/index');
    }
    public function new()
    {
        return view('trainingNote/new');
    }
    public function create()
    {
        return view('trainingNote/index');
    }
    public function calendar()
    {
        return view('trainingNote/calendar');
    }
}
