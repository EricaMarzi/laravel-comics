@extends('layouts.main')
@section('main-content')
<div class="container">
    <div class="row-main">
        <div class="col-main">
            @foreach($comics as $comic)
            <div class="card-main">
                <img class="poster" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <label>
                    <div class="title">{{$comic['series']}}</div>
                </label>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection