@extends('layouts.master')

@section('title')
    <title>{{ $widget->name }} Widget</title>
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/widget">Widgets</a></li>
        <li>{{ $widget->name }}</li>
    </ol>
    <h1>{{ $widget->name }}</h1>
    <hr>
    <div class="panel panel-default">
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Date Created</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td>{{ $widget->id }}</td>
                <td><a href="/widget/{{ $widget->id }}/edit">{{ $widget->name }}</a></td>
                <td>{{ $widget->created_at }}</td>
                <td>
                    <a href="/widget/{{ $widget->id }}/edit">
                        <button class="btn btn-default" type="button">Edit</button>
                    </a>
                </td>
                <td>
                    <div class="form-group">
                        <form action="{{ url('/widget' . $widget->id) }}" method="POST" role="form" class="form">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-danger" onclick="return ConfirmDelete()" value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </div>
@endsection

@section('script')
    <script>
        function ConfirmDelete() {
            return confirm('Are you sure you want to delete?');
        }
    </script>
@endsection