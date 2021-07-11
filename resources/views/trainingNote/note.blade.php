@extends('layouts.app')

@section('content')

    <h4>note page</h4>
    <p>
        <span><a href="{{ route('training-note', [
    'date' => $date->copy()->subDay()->format('Y-m-d'),
]) }}">
                <<a></span>
        {{ $date->format('Y-m-d') }}
        <span><a
                href="{{ route('training-note', [
    'date' => $date->copy()->addDay()->format('Y-m-d'),
]) }}">></a></span>
    </p>
    @if (!$records->count())
        <p>この日の記録はありません。</p>
    @else
        @foreach ($selections as $selection)
            @if ($records->where('training_id', $selection->id)->count())
            <p><a href="{{ route('training-new') }}">{{ $selection->name }}</a></p>
            <ul>
                @foreach ($records->where('training_id', $selection->id) as $record)
                    <li>
                        <span>{{ $record->weight }}kg</span>
                        <span>{{ $record->reps }}rep</span>
                    </li>
                @endforeach
            </ul>
             @endif
        @endforeach
    @endif
@endsection

