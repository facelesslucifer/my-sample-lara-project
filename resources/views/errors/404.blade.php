@extends('layouts.master')

@section('title')
    <title>404 Not Found</title>
@endsection

@section('content')
    <div class="alert alert-danger alert-dismissible alert-important" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Oh Snap!</strong> We can't find what you are looking for...
    </div>
@endsection