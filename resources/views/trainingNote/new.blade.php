@extends('layouts.app')
@section('content')
    <form method='POST' action="{{ route('training-store') }}">
        @csrf
        <div class="new-body">
            <p>
                <input name="date" id="date" type="date" value="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d'); ?>">
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
                <select name="weight" id="">
                    @for ($i = 200; $i > 0; $i--)
                        @if ($i==50)
                            <option value="{{ $i }}" selected>{{ $i }}</option>
                        @else
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endif
                    @endfor
                </select>
                <span>kg</span>
            </p>
            <p>
                <select name="reps" id="">
                    @for ($i = 50; $i > 0; $i--)
                        @if ($i==10)
                            <option value="{{ $i }}" selected>{{ $i }}</option>
                        @else
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endif
                    @endfor
                </select>
                <span>reps</span>
            </p>
            <input type="submit" class="btn btn-primary" value="記録する">
        </div>
    </form>

@endsection
