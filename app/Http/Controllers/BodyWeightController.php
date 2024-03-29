<?php

namespace App\Http\Controllers;

use App\BodyWeight;
use Illuminate\Http\Request;


class BodyWeightController extends Controller
{
    public function index()
    {
        $bodyWeights = BodyWeight::where('user_id', \Auth::id())->orderBy('date', 'DESC')->get();
        return view('bodyWeight.index', compact('bodyWeights'));
    }

    public function create()
    {
        return view('bodyWeight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->all();
        $data = [
            'user_id' => \Auth::id(),
            'bodyweight' => $post['bodyweight'],
            'date' => $post['date'],
        ];

        BodyWeight::insert($data);

        return redirect(route('weight.index'))->with('flash_message', '記録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
