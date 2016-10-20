@extends('layouts.master')
@section('title')
    <title>Test Page</title>
@endsection

@section('content')
    @if(count($Beatles) > 0)
        <h1>This is my Test page</h1>
        @foreach($Beatles as $Beatle)
            {{ $Beatle }}<br />
        @endforeach
    @else
        <h1>Sorry, nothing to show...</h1>
    @endif
@endsection