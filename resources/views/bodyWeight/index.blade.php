@extends('layouts.app')

@section('content')

<div class="">
            <div class="body-weight">
                <div><h5 class="">体重</h5></div>
            <div class="body">
                <ul class="list-inline ml-2">
                    <li><a href="{{ route('weight.create') }}">記録する</a></li>
                    @foreach ($bodyWeights as $weight)
                        <li>
                            <span>{{ sprintf('%.1f', $weight->bodyweight) }}</span>
                            <span>kg</span>
                            <span class="text-muted">　{{ $weight->date }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
</div>

@endsection
