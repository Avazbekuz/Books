@extends('admin.auth')
@section('content')
    <div class="main-panel" style="margin-top: 30px;">
        <form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
            @method('POST')
            @csrf
            @include('admin.books.form')
        </form>
    </div>
    <script>
        tinymce.init({
            selector: '#myTextarea'
        });
    </script>
@endsection
