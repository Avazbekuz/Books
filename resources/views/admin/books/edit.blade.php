@extends('admin.auth')
@section('content')
    <div class="main-panel" style="margin-top: 30px;">
        <form action="{{route('books.update',['book'=>$book->id])}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @include('admin.books.form')
        </form>
    </div>
@endsection
