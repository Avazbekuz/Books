@extends('admin.auth')
@section('content')
    <div class="main-panel" style="margin-top: 30px;">
        <form action="{{route('genre.update',['genre'=>$genre->id])}}" method="post">
            @method('PUT')
            @csrf
            @include('admin.genre.form')
        </form>
    </div>
@endsection
