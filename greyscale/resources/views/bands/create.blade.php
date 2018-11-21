@extends('n_master')

@section('content')

    <h1 class="title is-3">Add new band</h1>

    <form action="/bands" method="post">

        @csrf

        <div class="field">
            <label class="label">Band name</label>
            <div class="control">
            <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" placeholder="Band name" value="{{ old('name') }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Genre</label>
            <div class="control">
            <input class="input {{ $errors->has('genre') ? 'is-danger' : '' }}" type="text" name="genre" placeholder="Band genre" value="{{ old('genre') }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Main song</label>
            <div class="control">
            <input class="input {{ $errors->has('main_song') ? 'is-danger' : '' }}" type="text" name="main_song" placeholder="Song name" value="{{ old('main_song') }}">
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
            <button class="button is-link">Submit</button>
            </div>
        </div>

        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

@endsection