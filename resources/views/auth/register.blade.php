@extends('layout.master')

@section('content')
    <div class="rounded bg-card p-3">
        <form action="{{ url('/register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Enter Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Enter Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="">Enter Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="********">
            </div>
            <input type="submit" value="Login" class="btn btn-primary">
        </form>
    </div>
@endsection
