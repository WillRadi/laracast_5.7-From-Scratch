@extends('layout.master')

@section('page_header')

    <h1 class="mx-auto my-0 text-uppercase">{{ $skill }}</h1>
    
@endsection

@section('content')
    <section>
        <div class="row">
            <div class="col-4">
                <h2 class="text-center">Techniques</h2>
                <ul class="list-group">
                    @foreach ($techn as $t)
                        <li class="list-group-item">{{ $t->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection