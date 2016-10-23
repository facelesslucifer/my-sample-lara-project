@extends('layouts.master')

@section('title')
    <title>Unauthorized</title>
@endsection

@section('content')
    <div class="alert alert-danger alert-dismissible alert-important" role="alert">
        <button class="close" data-dismiss="alert" type="button" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Oh Snap!</strong> You are not authorized to do this...
    </div>
@endsection