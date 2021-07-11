@extends('layouts.app')

@section('content')

<div class="">
    <p><a href="{{ route('weight.create') }}">記録する</a></p>
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
            </div>
        </div>
</div>

@endsection
