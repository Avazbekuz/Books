@extends('admin.auth')
@section('content')
    <div class="main-panel" style="margin-top: 30px;">
        <form action="{{route('category.update',['category'=>$category->id])}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @include('admin.category.form')
        </form>
    </div>
@endsection
