@extends('layouts.app')

@section('content')
<div>
<h5>メモトレ！</h5>
<p>トレーニング初心者はまずメモを取ることから始まります。</p>
<p>このアプリはトレーニングのメモをカンタンにとるために作成しました。</p>
<p>メモをとれば体が変わる。</p>
<p>このアプリを使って人生を変えましょう！</p>

<ul>
    <li><a href="{{ route('training-new') }}">トレーニングをメモする</a></li>
    <li><a href="{{ route('weight.create') }}">体重をメモする</a></li>
    <li><a href="/">変化をみる</a></li>
</ul>
</div>


@endsection


