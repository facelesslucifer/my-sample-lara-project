@extends('layouts.master')

@section('title')
    <title>Error! No Active Account</title>
@endsection

@section('content')
    <div class="container">
        <div class="alert alert-danger alert-dismissible alert-important" role="alert">
            <button class="close" data-dismiss="alert" type="button" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oh! Snap!</strong> You do not have an active account...
        </div>
    </div>
@endsection