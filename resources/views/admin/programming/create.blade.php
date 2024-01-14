@extends('admin.auth.layout.master')
@section('content')
    <div>
        <a href="{{ route('admin.programming.index') }}" class="btn btn-primary">All Languages</a>
    </div>
    <hr>
    <form action="{{ route('admin.programming.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <input type="submit" value="Create" class="btn btn-dark">
    </form>
@endsection
