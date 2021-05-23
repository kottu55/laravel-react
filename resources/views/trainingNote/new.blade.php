@extends('layouts.app')

@section('content')
    <form method='POST' action="">
        @csrf
        <div class="menu-bar">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="{{ route('training-index') }}">home</a></li>
                <li class="list-inline-item"><a href="{{ route('training-calendar') }}">calendar</a></li>
                <li class="list-inline-item"><a href="">note</a></li>
                <li class="list-inline-item"><a href="{{ route('training-new') }}">pen</a></li>
            </ul>
        </div>
        <div class="new-body">
            <p>
                <select name="" id="" class="date">
                    <option value="">2021/05/23</option>
                    <option value="">2021/05/23</option>
                    <option value="">2021/05/23</option>
                    <option value="">2021/05/23</option>
                </select>
            </p>
            <p>
                <select name="" id="" class="move">
                    <option value="">ベンチプレス</option>
                    <option value="">スクワット</option>
                    <option value="">デッドリフト</option>
                </select>
            </p>
            <p>
                <select name="" id="" class="body-weight">
                    <option value="">50.1</option>
                    <option value="">50.2</option>
                    <option value="">50.3</option>
                    <option value="">50.4</option>
                </select>
                <span>kg</span>
            </p>
            <p>
                <select name="" id="" class="reps">
                    <option value="">5</option>
                    <option value="">4</option>
                    <option value="">3</option>
                    <option value="">2</option>
                </select>
                <span>reps</span>
            </p>
            <input type="submit" class="btn btn-primary" value="完了">
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
