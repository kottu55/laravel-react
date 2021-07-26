@extends('layouts.app')
@section('content')
    <form method='POST' action="{{ route('training-store') }}">
        @csrf
        <div class="new-body">
            <p>
                <input name="date" id="date" type="date" value="<?php echo date('Y-m-d'); ?>"
                max="<?php echo date('Y-m-d'); ?>">
            </p>
            <p>
                <select name="training_id" id="" class="move">
                    @foreach ($selections as $select)
                        @if ($menu_id == $select->id)
                        <option value="{{ $select->id }}" selected>{{ $select->name }}</option>
                        @else
                        <option value="{{ $select->id }}">{{ $select->name }}</option>
                        @endif
                    @endforeach
                </select>
            </p>
            <p>
                <input name="weight" id="" type="number" value="50" min="1" max="200">
                <span>kg</span>
            </p>
            <p>
                <input name="reps" id="" type="number" value="10" min="1" max="50">

                <span>reps</span>
            </p>
            <input type="submit" class="btn btn-primary" value="記録する">
        </div>
    </form>

@endsection
