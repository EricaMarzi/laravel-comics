@extends('layouts.main')
@section('main-content')
<div class="container">
    <div class="row-main">
        <div class="col-main">
            @foreach($comics as $poster)
            <div class="card-main"><a href="{{route('comic')}}">

                    <img class="poster" src="{{$poster['thumb']}}" alt="{{$poster['title']}}">
                </a>
                <label>
                    <div class="title">{{$poster['series']}}</div>
                </label>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection