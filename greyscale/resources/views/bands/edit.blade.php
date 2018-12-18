@extends('n_master')

@section('content')

<h1 class="title is-3">Edit band</h1>

<form action="/bands/{{ $band->id }}" method="post">

    @method('PATCH')
    
    @csrf

    <div class="field">
        <label class="label">Band name</label>
        <div class="control">
            <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" value="{{ $band->name }}">
        </div>
    </div>

    <div class="field">
        <label class="label">Genre</label>
        <div class="control">
        <input class="input {{ $errors->has('genre') ? 'is-danger' : '' }}" type="text" name="genre" value="{{ $band->genre }}">
        </div>
    </div>

    <div class="field">
        <label class="label">Main song</label>
        <div class="control">
        <input class="input {{ $errors->has('main_song') ? 'is-danger' : '' }}" type="text" name="main_song" value="{{ $band->main_song }}">
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
        <button class="button is-link">save</button>
        </div>
    </div>

    @include('errors')

</form>

@endsection