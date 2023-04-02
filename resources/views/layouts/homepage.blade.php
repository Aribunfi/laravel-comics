@extends('layouts.app')

@section('title')
Homepage
@endsection

@section('content')
<div class="row bg-dark justify-content-center">
    @foreach($comics as $comic);
    <div class="col-2 bg-dark">
        <div class="card bg-dark text-white text-center" style="width: 18rem;">
            <img src="https://picsum.photos/300/500" class="card-img-top" alt="thumb">
            <div class="card-body d-flex flex-column">
            <p class="card-text">{{$comic['title']}}</p>
            </div>
        </div>
    </div>
    @endforeach
    <button type="button" class="btn btn-primary">LOAD MORE</button>
</div>
@endsection

