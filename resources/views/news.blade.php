@extends('templates.template',['send'=>'from news.blade.php'])

@section('css')
<link rel="stylesheet" href="style.css">
@endsection



@section('content')
<div class="news">
    <h3>This is News Page - {{ $name }}</h3>
    <p>Nội dung tin tức</p>
</div>
@endsection

@section('js')
<script src="scripts.js"></script>
@endsection
