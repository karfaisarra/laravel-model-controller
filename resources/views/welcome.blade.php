@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="pb-5">All Movies</h1>
    <div class="row row-cols-3 g-4">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card border-0 bg-trasparant">
                <img src="https://picsum.photos/200/300" alt="" class="card-img-top rounded-0">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><strong>Titolo: </strong>{{$movie->title}}</li>
                        <li><strong>Titolo Originale: </strong>{{$movie->original_title}}</li>
                        <li><strong>Nazione: </strong> {{$movie->nationality}} </li>
                        <li><strong>Data: </strong> {{$movie->date}} </li>
                        <li><strong>Voto: </strong> {{$movie->vote}} </li>
                    </ul>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <p>n'ya pas de films</p>
        </div>
        @endforelse
    </div>
</div>
@endsection