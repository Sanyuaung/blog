@extends('layout.master')

@section('content')
    <div id="root"></div>
@endsection
@section('js')
<script>
</script>
    @viteReactRefresh
    @vite(['resources/js/Profile.jsx'])
@endsection
