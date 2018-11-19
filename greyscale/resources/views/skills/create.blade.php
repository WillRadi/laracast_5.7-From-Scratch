@extends('layout.form_master')

@section('content')
    <div class="container">
        <h1>Add a new skill</h1>
        <form method="POST" action="/">

            {{ csrf_field() }}

            <div class="form-group">
                <label>Skill name</label>
                <input type="text"  class="form-control" name="label">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="5" name="description"></textarea>
            </div>
            <div class="form-group">
                <label>Techniques</label>
                <input type="text"  class="form-control" aria-describedby="tecHelp" name="techn">
                <small id="tecHelp" class="form-text text-muted">Separate with comma</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <br>
    <br>
@endsection