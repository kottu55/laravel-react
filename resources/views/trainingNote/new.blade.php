@extends('layouts.app')

@section('content')
    <form method='POST' action="{{route('training-store')}}">
        @csrf
        <div class="menu-bar">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="{{ route('training-index') }}">home</a></li>
                <li class="list-inline-item"><a href="{{ route('training-calendar') }}">calendar</a></li>
                <li class="list-inline-item"><a href="{{ route('training-note') }}">note</a></li>
                <li class="list-inline-item"><a href="{{ route('training-new') }}">pen</a></li>
            </ul>
        </div>
        <div class="new-body">
            <p>
                <select name="date" id="" class="date">
                    <option value="2021/05/26">2021/05/23</option>
                    <option value="2021/05/26">2021/05/23</option>
                    <option value="2021/05/26">2021/05/23</option>
                    <option value="2021/05/26">2021/05/23</option>
                </select>
            </p>
            <p>
                <select name="training_id" id="" class="move">
                    <option value="1">ベンチプレス</option>
                    <option value="2">スクワット</option>
                    <option value="3">デッドリフト</option>
                </select>
            </p>
            <p>
                <select name="weight" id="" class="body-weight">
                    <option value="50">50</option>
                    <option value="51">51</option>
                    <option value="53">53</option>
                    <option value="54">54</option>
                </select>
                <span>kg</span>
            </p>
            <p>
                <select name="reps" id="" class="reps">
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
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
