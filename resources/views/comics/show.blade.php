@extends('layouts.app')

@section('title', 'Comics')

@section('content')

    <div class="bg-black">
        <div class="container">
        <div class="row">
           
                <div class="col-12 col-md-4 col=lg-3">
                <div class="card">
                    <img class="my-img-container" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['title']}}</h5>
                        <p class="card-text">{{substr($comic['description'], 0, 50) .'...'}}</p>                  
                      </div>
                </div>
            </div>
            
            
        </div>
    </div>


@endsection
    </div>