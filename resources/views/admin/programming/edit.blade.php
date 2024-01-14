@extends('admin.auth.layout.master')
@section('content')
    <div>
        <a href="{{ route('admin.programming.index') }}" class="btn btn-primary">All Languages</a>
    </div>
    <hr>
    <form action="{{ route('admin.programming.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" value="{{ $data->name }}" name="name">
        </div>
        <input type="submit" value="Update" class="btn btn-dark">
    </form>
@endsection
