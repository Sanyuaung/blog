@extends('admin.auth.layout.master')
@section('content')
    {{ auth()->guard('admin')->user() }}
@endsection
