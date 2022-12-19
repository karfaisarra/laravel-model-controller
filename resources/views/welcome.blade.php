@extends('layouts.app')

@section('content')
<h1>All Movies</h1>
<div class="container">
    <div class="row">

        <div class="col">
            <div class="card">
                <img src="" alt="" class="card-img-top">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><strong>Titolo: {{$movie->title}} </strong></li>
                        <li><strong>Titolo Originale: {{}} </strong></li>
                        <li><strong>Nazione: </strong> {{}} </li>
                        <li><strong>Data: </strong> {{}} </li>
                        <li><strong>Voto: </strong> {{}} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection