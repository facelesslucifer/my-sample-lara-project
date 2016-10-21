@extends('layouts.master')

@section('title')
    <title>Create a Widget</title>
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/widget">Widgets</a></li>
        <li class="active">Create</li>
    </ol>
    <h2>Create a New Widget</h2>
    <hr>
    <form action="{{ url('/widget') }}" class="form" role="form" method="post">
        {{ csrf_field() }}
        <!-- name from input -->
        <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name" class="control-label">Widget Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            @if($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-lg" type="submit">Create</button>
        </div>
    </form>
@endsection