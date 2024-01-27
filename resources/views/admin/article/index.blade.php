@extends('admin.auth.layout.master')
@section('content')
    <div>
        <a href={{ route('admin.article.create') }} class="btn btn-primary">Create</a>
    </div>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Like Count</th>
                <th>View Count</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->like_count }}</td>
                    <td>{{ $d->view_count }}</td>
                    <td>
                        <a href="{{ route('admin.article.edit', $d->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.article.destroy', $d->id) }}" class="d-inline" method="POST">
                            @method('DELETE')@csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                        <button type="button" class="ml-2 btn btn-success" data-toggle="modal"
                            data-target="#id{{ $d->id }}">
                            view
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection
@section('script')
    @foreach ($data as $d)
        <div class="modal fade" id="id{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {{-- <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $d->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> --}}
                    <div class="modal-body">
                        <img src="{{ asset('/images/' . $d->image) }}" class="w-100 mb-2 img-thumnail">
                        @foreach ($d->tag as $tag)
                            <span class="badge mb-2 bg-dark text-white">{{ $tag->name }}</span>
                        @endforeach
                        |
                        @foreach ($d->programming as $p)
                            <span class="mb-2 badge bg-secondary text-dark">{{ $p->name }}</span>
                        @endforeach
                        <div>
                            <h3>{{ $d->name }}</h3>
                            <div>{!! $d->description !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
