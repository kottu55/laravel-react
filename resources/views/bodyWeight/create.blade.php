@extends('layouts.app')

@section('content')

   <form method='POST' action="{{ route('weight.store') }}">
        @csrf
        <div class="new-body">
            <p>
                <input name="date" id="date" type="date" value="<?php echo date('Y-m-d'); ?>"
                max="<?php echo date('Y-m-d'); ?>">
            </p>
            <p>
                <input name="bodyweight" id="" type="number" value="60.1" min="30" max="200" step="0.1">
                <span>kg</span>
            </p>
            <input type="submit" class="btn btn-primary" value="記録する">
        </div>

    </form>
@endsection
