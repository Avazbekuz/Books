@extends('admin.auth')
@section('content')
    <div class="main-panel" style="margin-top: 30px;">
        <form action="{{route('author.store')}}" method="post">
            @method('POST')
            @csrf
            @include('admin.genre.form')
        </form>
    </div>
@endsection
