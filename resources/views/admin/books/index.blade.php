@extends('admin.auth')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="d-flex">
                {{$books->links()}}
            </div>
            <a href="{{route('books.create')}}" class="btn btn-success" style="margin-bottom: 50px;">Qo'shish</a>
        </div>

        <div class="card-body p-0 b">
            <div class="table-responsive">
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Categoria</th>
                        <th>Name</th>
                        <th>Muallif</th>
                        <th>Janr</th>
                        <th>Amallar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr class="col-2">
                            <th>{{$books->currentPage()-1)*$books->perpage()+($loop -> index+1}}</th>
                            <td>{{$book->category->name}}</td>
                            <td>{{$book->name}}</td>
                            <td>{{$book->author->name}}</td>
                            <td>{{$book->genres->name}}</td>
                            <td><div class="d-flex"><a href="{{route('books.show',['book'=>$book->id])}}" class="btn btn-success" style="margin-right: 10px;"><i class="ti-eye menu-icon"></i></a><a href="{{route('books.edit',['book'=>$book->id])}}" class="btn btn-info" style="margin-right: 10px;"><i class="ti-pencil menu-icon"></i></a><form action="{{route('books.destroy',['book'=>$book->id])}}" method="post">@method('DELETE') @csrf <button class="btn btn-danger"><i class="ti-trash menu-icon"></i></button></form></div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
