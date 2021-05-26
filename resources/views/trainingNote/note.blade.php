@extends('layouts.app')

@section('content')

    <div class="menu-bar">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('training-index') }}">home</a></li>
            <li class="list-inline-item"><a href="{{ route('training-calendar') }}">calendar</a></li>
            <li class="list-inline-item"><a href="{{ route('training-note') }}">note</a></li>
            <li class="list-inline-item"><a href="{{ route('training-new') }}">pen</a></li>
        </ul>
    </div>

    <p>note page</p>
    <div class="footer-menu">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="">jangle</a></li>
            <li class="list-inline-item"><a href="">copylight</a></li>
            <li class="list-inline-item"><a href="">about</a></li>
        </ul>
    </div>

@endsection
