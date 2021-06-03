@extends('layouts.app')

@section('content')

    <h4>note page</h4>
    <p>{{ $date }}</p>
    @if (!$records->count())
        <p>今日の記録はありません。</p>
    @else
        @foreach ($records as $record)
            <p>
                <span>{{ $record->weight }}kg</span>
                <span>{{ $record->reps }}rep</span>
                <span><a href="{{ route('training-new')}}">{{ $selections->find($record->training_id)->name }}</a></span>
            </p>
        @endforeach
    @endif
@endsection
