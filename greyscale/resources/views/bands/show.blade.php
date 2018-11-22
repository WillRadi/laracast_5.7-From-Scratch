@extends('n_master')

@section('content')

<h3 class="title is-3">{{ $band->name }}</h3>

<h5 class="subtitle is-5">{{ $band->genre }}</h5>

@if (count($band->songs) > 0)

<div>

    <h4 class="title is-4">Songs:</h4>
    
    <div class="content">
        @foreach ($band->songs as $song)
            <div>

                <form method="post" action="/songs/{{ $song->id }}">
                    
                    @method('PATCH')
                    @csrf

                    <label for="played" class="checkbox {{ $song->played ? 'is-played' : '' }} ">
                        <input type="checkbox" name="played" onChange="this.form.submit()" {{ $song->played ? 'checked' : '' }}>
                        {{ $song->name }}
                    </label>

                </form>

            </div>
        @endforeach
    </div>

</div>

@endif
<div class="display is-flex">

<a href="/bands/{{ $band->id }}/edit" class="button is-link margin-right">Edit</a>

<form action="/bands/{{ $band->id }}" method="post">
    
    @csrf
    @method('DELETE')

    <button class="button is-danger">Delete</button>

</form>

</div>

@endsection