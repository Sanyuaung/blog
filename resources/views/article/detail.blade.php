@extends('layout.master')

@section('content')
    <div id="root"></div>
@endsection
@section('js')
    @viteReactRefresh
    @vite(['resources/js/ArticleDetail.jsx'])
@endsection
