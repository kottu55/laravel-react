@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card mb50">
            <div class="card-body text-center">
                <div class='image-wrapper'><img class='book-image' style="width: 100%;" src="{{ asset('images/dummy.png') }}"></div>
                <h3 class='h3 book-title'>筋トレノート</h3>
                <a href="{{ route('training-index') }}"class='btn btn-secondary detail-btn'>TOP</a>
            </div>
        </div>
    </div>
</div>

@endsection
