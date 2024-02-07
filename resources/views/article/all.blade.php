{{-- @extends('layout.master')

@section('content')
    <div class="mt-4">
        <form action="" class="d-flex">
            <input type="text" name="name" id="name" placeholder="Search Blog..."
                class="form-control rounded bg-card">
            <input type="submit" value="Search" class="btn btn-primary ml-2">
        </form>
    </div>
    <div class="mt-4 blog-list">
        <div class="row p-0 m-0">
            @foreach ($data as $d)
                <div class="col-6  pl-0 mt-4">
                    <div class="rounded bg-card">
                        <a href="{{ url('/article/' . $d->slug) }}">
                            <img class="rounded" src="{{ asset('/images/' . $d->image) }}" style="width:100%"
                                alt="">
                        </a>
                        <div class="p-4 text-white">
                            <h4 class="text-white">{{ $d->name }}</h4>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-dark"><span class="text-success"><i
                                            class='bx bx-happy-heart-eyes'></i></span> :
                                    {{ $d->view_count }}</button>
                                <button class="btn btn-dark"><span class="text-success"><i class='bx bx-heart'></i></span> :
                                    {{ $d->like_count }}</button>
                                <button class="btn btn-dark"><span class="text-success"><i
                                            class='bx bx-message-square-dots'></i></span> :
                                    {{ $d->comment_count }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <div class="col-12">
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection --}}

@extends('layout.master')

@section('content')
    <div id="root"></div>
@endsection
@section('js')
    <script>
        const bladeArticleAll = @json($data);
    </script>
    @viteReactRefresh
    @vite(['resources/js/All.jsx'])
@endsection
