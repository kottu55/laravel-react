<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MoveRecord;


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
    public function store(Request $request)
    {
        $post = $request->all();
        $data = [
            'user_id' => \Auth::id(),
            'training_id' => $post['training_id'],
            'weight' => $post['weight'],
            'reps' => $post['reps'],
            'date' => $post['date'],
        ];

        MoveRecord::insert($data);

        return redirect('/training-note/note')->with('flash_message','記録しました');
    }
    public function calendar()
    {
        return view('trainingNote/calendar');
    }
    public function note()
    {
        return view('trainingNote/note');
    }
}
