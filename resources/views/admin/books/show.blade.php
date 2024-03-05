@extends('admin.auth')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div style="background-color: white; border-radius: 5px; align-items: center; margin-left: 100px; height: auto; width: 600px;">
                <div style="margin-left: 20px; padding-top: 20px;">
                    <h1>{{$book->category->name}}</h1>
                    <h4>{{$book->author->name}}</h4>
                    <h4>{{$book->genres->name}}</h4>
                    <h6>{{$book->name}}</h6>
                    <p>{{$book->text}}</p>
                    <p>Yili: {{$book->year}}</p>
                    <div style="display: flex; align-items: center; flex-wrap: wrap;">
                        <img src="{{url('storage/'.$book->photo)}}" alt="rasm" width="100" height="100">
                    </div>
                    <div style="margin-top: 20px; padding-bottom: 20px;">
                        <a href="{{route('books.index')}}" class="btn btn-info">Chiqish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
