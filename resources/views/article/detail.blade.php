@extends('layout.master')

@section('content')
    <div id="root"></div>
@endsection
@section('js')
<script>
    const bladeArticleDetail = @json($data);
    const bladeIsAuth = @json(auth()->check());
</script>
    @viteReactRefresh
    @vite(['resources/js/ArticleDetail.jsx'])
@endsection
