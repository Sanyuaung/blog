@extends('admin.auth.layout.master')
@section('content')
    <div>
        <a href={{ route('admin.article.create') }} class="btn btn-primary">Create</a>
    </div>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Slug</th>
                <th>Name</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->slug }}</td>
                    <td>{{ $d->name }}</td>
                    <td>
                        <a href="{{ route('admin.tag.edit', $d->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.tag.destroy', $d->id) }}" class="d-inline" method="POST">
                            @method('DELETE')@csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection
