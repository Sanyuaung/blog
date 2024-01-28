@extends('layout.master')

@section('content')
    <div id="root"></div>
@endsection
@section('js')
<script>
    const bladeArticleDetail = @json($data);
</script>
    @viteReactRefresh
    @vite(['resources/js/ArticleDetail.jsx'])
@endsection
