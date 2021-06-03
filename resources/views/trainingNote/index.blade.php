@extends('layouts.app')

@section('content')
    <div class="menu-body">
        <div class="training-select">
            <h5>トレーニングを記録する</h5>
            <ul>
                @foreach ($selections as $select)
                        <li><a href="{{ route('training-new') }}">{{ $select->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="body-weight">
            <div class="title list-inline">
                <h5 class="list-inline-item">体重</h5>
                <select class="list-inline-item" name="" id="">
                    <option value="today">2021/05/22</option>
                    <option value="">2021/05/21</option>
                    <option value="">2021/05/20</option>
                </select>
                <span class="list-inline-item"><a href="{{ route('training-new') }}">✎</a></span>
            </div>
            <div class="body">
                <ul>
                    <li>
                        <span>50.1kg</span>
                        <span class="text-muted">2021/05/22</span>
                        <span class="text-muted">22:05</span>
                    </li>
                    <li>
                        <span>50.1kg</span>
                        <span class="text-muted">2021/05/22</span>
                        <span class="text-muted">22:05</span>
                    </li>
                    <li>
                        <span>50.1kg</span>
                        <span class="text-muted">2021/05/22</span>
                        <span class="text-muted">22:05</span>
                    </li>
                    <li>
                        <span>50.1kg</span>
                        <span class="text-muted">2021/05/22</span>
                        <span class="text-muted">22:05</span>
                    </li>
                    <li>
                        <span>50.1kg</span>
                        <span class="text-muted">2021/05/22</span>
                        <span class="text-muted">22:05</span>
                    </li>
                    <li>
                        <span>50.1kg</span>
                        <span class="text-muted">2021/05/22</span>
                        <span class="text-muted">22:05</span>
                    </li>
                </ul>

            </div>
        </div>
    </div>


@endsection
