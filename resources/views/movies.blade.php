@extends('layouts.app')

@section('title','Film')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row row-cols-5">
                @foreach ($index as $movie)
                    <div class="col my-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-center">{{$movie -> title}}</h5>
                                <h6 class="card-subtitle fst-italic mb-2 text-body-secondary text-center">{{$movie->original_title}}</h6>
                                <div>
                                    <span class="fw-semibold">Nazione: </span>
                                    <span class="info">{{$movie->nationality}}</span>
                                </div>
                                <div>
                                    <span class="fw-semibold">Rilascio: </span>
                                    <span class="info">{{$movie->date}}</span>
                                </div>
                                <div>
                                    <span class="fw-semibold">Valutazione: </span>
                                    <span class="info">{{$movie->vote}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection