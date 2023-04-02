@extends('layouts.app')

@section('title')
Homepage
@endsection

@section('content')
<div class="row">
    @foreach($comics as $comic);
    <h2>{{ $comic['title'] }}</h2>
    @endforeach
</div>
@endsection