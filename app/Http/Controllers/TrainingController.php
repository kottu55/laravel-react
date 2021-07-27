<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MoveRecord;
use App\BodyWeight;
use App\Selection;
use Carbon\Carbon;


class TrainingController extends Controller
{
    public function index()
    {
        $selections = Selection::where('category', 'move')->get();
        $bodyWeights = BodyWeight::where('user_id', \Auth::id())->orderBy('date', 'DESC')->take(7)->get();
        return view('trainingNote/index', compact('selections', 'bodyWeights'));
    }
    public function new(Request $request)
    {
        $menu_id = $request->menu;
        $selections = Selection::where('category', 'move')->get();
        return view('trainingNote/new', compact('selections', 'menu_id'));
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

        return redirect(route('training-note', ['date' => $data['date']]))->with('flash_message', '記録しました');
    }
    public function calendar()
    {
        return view('trainingNote/calendar');
    }
    public function note($date)
    {
        $date = new Carbon($date);
        $records = MoveRecord::where('user_id', \Auth::id())->where('date', $date->format('Y-m-d'))->orderBy('training_id', 'ASC')->get();
        $selections = Selection::where('category', 'move')->get();
        return view('trainingNote/note', compact('records', 'selections', 'date'));
    }
}
