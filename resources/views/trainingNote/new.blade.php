@extends('layouts.app')

@section('content')
    <form method='POST' action="{{route('training-store')}}">
        @csrf
        <div class="menu-bar">
            <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('training-index') }}">ホーム</a></li>
            <li class="list-inline-item"><a href="{{ route('training-calendar') }}">カレンダー</a></li>
            <li class="list-inline-item"><a href="{{ route('training-note') }}">ノート</a></li>
            <li class="list-inline-item"><a href="{{ route('training-new') }}">記録する</a></li>
            </ul>
        </div>
        <div class="new-body">
            <p>
                <input name="date" id="date" type="date" value="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d'); ?>">
            </p>
            <p>
                <select name="training_id" id="" class="move">
                    <option value="1">ベンチプレス</option>
                    <option value="2">スクワット</option>
                    <option value="3">デッドリフト</option>
                </select>
            </p>
            <p>
                <input name="weight" id="" type="number" value="50" min="5" max="120">
                <span>kg</span>
            </p>
            <p>
                <input name="reps" id="" type="number" value="10" min="1" max="50">

                <span>reps</span>
            </p>
            <input type="submit" class="btn btn-primary" value="記録する">
        </div>

    </form>

    <div class="footer-menu">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="">jangle</a></li>
            <li class="list-inline-item"><a href="">copylight</a></li>
            <li class="list-inline-item"><a href="">about</a></li>
        </ul>
    </div>

@endsection
