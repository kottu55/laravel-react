@extends('layouts.app')

@section('content')
    <div class="menu-body">
        <div class="training-select">
            <h5>トレーニングを記録する</h5>
            <ul class="list-inline ml-2">
                @foreach ($selections as $select)
                        <li><a href="{{ route('training-new', ['menu' => $select->id]) }}">{{ $select->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="body-weight">
                <div><h5 class="">体重</h5></div>
            <div class="body">
                <ul class="list-inline ml-2">
                    @foreach ($bodyWeights as $weight)
                        <li>
                            <span>{{ $weight->bodyweight }}</span>
                            <span>kg</span>
                            <span class="text-muted">　{{ $weight->date }}</span>
                        </li>
                    @endforeach
                </ul>
                <div class=""><a href="{{ route('weight.index') }}">すべて</a></div>
            </div>
        </div>
    </div>


@endsection
