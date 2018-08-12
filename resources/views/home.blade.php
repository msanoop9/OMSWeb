@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                 <div id="message" class="alert alert-success">
                   {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    <div class="row justify-content-center">
    @if($movies)
        @foreach($movies as $movie)
            <div class="card col-md-3" style="width: 18rem; margin:1rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted"> <b>€</b> {{ $movie->price }}</h6>
                    <p class="card-text">{{ $movie->description }}</p>
                    <a href="#" class="card-link">Edit Movie</a>
                    <a href="#" class="card-link">Delete</a>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center text-primary">No Posts created Yet!</p>
    @endif
    </div>
</div>
@endsection
