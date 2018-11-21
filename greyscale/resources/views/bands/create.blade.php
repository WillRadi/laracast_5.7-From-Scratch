@extends('n_master')

@section('content')

    <h1 class="title is-3">Add new band</h1>

    <form action="/bands" method="post">

        @csrf

        <div class="field">
            <label class="label">Band name</label>
            <div class="control">
                <input class="input" type="text" name="name" placeholder="Band name">
            </div>
        </div>

        <div class="field">
            <label class="label">Genre</label>
            <div class="control">
            <input class="input" type="text" name="genre" placeholder="Band genre">
            </div>
        </div>

        <div class="field">
            <label class="label">Main song</label>
            <div class="control">
            <input class="input" type="text" name="main_song" placeholder="Song name">
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
            <button class="button is-link">Submit</button>
            </div>
        </div>

    </form>

@endsection