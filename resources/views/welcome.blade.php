@extends('layouts.app')

@section('content')
    <section class="container-xl">
        <div class="row g-4 justify-content-between">
            @foreach ($movie as $singleMovie)
                <div class="card col-4" style="width: 18rem;">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}

                    <div class="card-body">
                        <h5 class="card-title">{{ $singleMovie->title }}</h5>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Titolo originale: {{ $singleMovie->original_title }}</li>
                        <li class="list-group-item">Paese di produzione: {{ $singleMovie->nationality }}</li>
                        <li class="list-group-item">Data di uscita: {{ $singleMovie->date }}</li>
                        <li class="list-group-item">Voto: {{ $singleMovie->vote }}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </section>
@endsection
