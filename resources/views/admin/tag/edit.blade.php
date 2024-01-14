@extends('admin.auth.layout.master')
@section('content')
    <div>
        <a href="{{ route('admin.tag.index') }}" class="btn btn-primary">All Tags</a>
    </div>
    <hr>
    <form action="{{ route('admin.tag.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" value="{{ $data->name }}" name="name">
        </div>
        <input type="submit" value="Update" class="btn btn-dark">
    </form>
@endsection
