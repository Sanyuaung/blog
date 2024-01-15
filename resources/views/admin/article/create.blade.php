@extends('admin.auth.layout.master')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
@section('content')
    <div>
        <a href="{{ route('admin.article.index') }}" class="btn btn-primary">All Articles</a>
    </div>
    <hr>
    <form action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Choose Tags</label>
            <select name="tag[]" id="tag" multiple>
                @foreach ($tag as $t)
                    <option value="{{ $t->id }}">{{ $t->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Choose Programming</label>
            <select name="programming[]" id="programming" multiple>
                @foreach ($programming as $p)
                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <input type="submit" value="Create" class="btn btn-dark">
    </form>
@endsection
@section('script')
    <script src="ht tps://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script>
        $('#description').summernote({
            // placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 100
        });
        $('#tag').select2();
        $('#programming').select2();
    </script>
@endsection
