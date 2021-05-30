@extends('layouts.app')

@section('content')

    <div class="menu-bar">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('training-index') }}">ホーム</a></li>
            <li class="list-inline-item"><a href="{{ route('training-calendar') }}">カレンダー</a></li>
            <li class="list-inline-item"><a href="{{ route('training-note') }}">ノート</a></li>
            <li class="list-inline-item"><a href="{{ route('training-new') }}">記録する</a></li>
        </ul>
    </div>

    <p>calendar page</p>
    <div class="footer-menu">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="">jangle</a></li>
            <li class="list-inline-item"><a href="">copylight</a></li>
            <li class="list-inline-item"><a href="">about</a></li>
        </ul>
    </div>

@endsection
