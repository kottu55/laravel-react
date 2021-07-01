@extends('layouts.app')

@section('content')

    <h4>体重一覧</h4>
    @foreach ($records as $record)
        <p>
            <span>{{ $record->weight }}kg</span>
            <span>{{ $record->reps }}rep</span>
            <span><a href="{{ route('training-new') }}">{{ $selections->find($record->training_id)->name }}</a></span>
        </p>
    @endforeach
@endsection
