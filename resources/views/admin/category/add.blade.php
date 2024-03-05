@extends('admin.auth')
@section('content')
    <div class="main-panel" style="margin-top: 30px;">
        <form action="{{route('category.store')}}" method="post">
            @method('POST')
            @csrf
            @include('admin.category.form')
        </form>
    </div>
@endsection
