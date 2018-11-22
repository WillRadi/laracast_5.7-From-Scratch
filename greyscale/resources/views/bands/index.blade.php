@extends('n_master')

@section('content')

    <h1 class="title is-3">Bands</h1>

    @foreach ($bands as $b)
        <div>
            <a href="bands/{{ $b->id }}">
                {{ $b->name }} <span class="tag is-danger">-></span> {{ $b->main_song }}
            </a>
        </div>
    @endforeach

@endsection