@extends('layout.master')

@section('content')
    <div class="mt-4">
        <input placeholder="Search Blog..." type="text" class="form-control rounded bg-card">
    </div>

    <!-- first blog -->
    <div class="mt-4">
        <div class="d-flex rounded bg-card">
            <img style="width: 400px;" src="{{ $mostComment->image_url }}" class="rounded">
            <div class="p-3">
                <b class="text-warning">Fullstack</b>
                <h3 class="text-white">What is MERN Fullstack App?</h3>
                <p>
                    {{ $mostComment->name }}
                </p>
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="" class="text-muted">
                            <i class='bx bx-user'></i>
                            <small>Admin</small>
                        </a>
                    </div>
                    <div>
                        <a href="" class="text-muted">
                            <i class='bx bx-happy-heart-eyes'></i>
                            <small>{{ $mostComment->view_count }}</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 blog-list">
        <div class="row p-0 m-0">
            @foreach ($latest as $l)
                <div class="col-6  pl-0 mt-4">
                    <div class="rounded bg-card">
                        <img class="rounded" src="{{ $l->image_url }}" style="width:100%" alt="">
                        <div class="p-4 text-white">
                            <h4 class="text-white">{{ $l->name }}</h4>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-dark"><span class="text-success"><i
                                            class='bx bx-happy-heart-eyes'></i></span> :
                                    {{ $l->view_count }}</button>
                                <button class="btn btn-dark"><span class="text-success"><i class='bx bx-heart'></i></span> :
                                    {{ $l->like_count }}</button>
                                <button class="btn btn-dark"><span class="text-success"><i
                                            class='bx bx-message-square-dots'></i></span> :
                                    {{ $l->comment_count }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
