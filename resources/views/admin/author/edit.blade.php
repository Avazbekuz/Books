@extends('admin.auth')
@section('content')
    <div class="main-panel" style="margin-top: 30px;">
        <form action="{{route('author.update',['author'=>$author->id])}}" method="post">
            @method('PUT')
            @csrf
            @include('admin.author.form')
        </form>
    </div>
@endsection
