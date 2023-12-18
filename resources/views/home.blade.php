@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-12 col-md-4">
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['title']}}</h5>
                        <p class="card-text">{{$comic['description']}}</p>
                        
                      </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</main>

@endsection