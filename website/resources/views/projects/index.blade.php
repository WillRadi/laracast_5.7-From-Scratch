@extends('layout')

@section('title', 'Projects')
    
@section('content')

    <h1>Laravel projects</h1>

    @foreach ($projects as $p)
        <ul>
            <li>{{ $p->name }}</li>
        </ul>
    @endforeach

@endsection