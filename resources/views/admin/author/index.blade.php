@extends('admin.auth')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            {{$authors->links()}}
            <a href="{{route('author.create')}}" class="btn btn-success" style="margin-bottom: 50px;">Qo'shish</a>
        </div>

        <div class="card-body p-0 b">
            <div class="table-responsive">
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nomi</th>
                        <th>Amallar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($authors as $author)
                        <tr class="col-2">
                            <th>{{$authors->currentPage()-1)*$authors->perpage()+($loop -> index+1}}</th>
                            <td>{{$author->name}}</td>
                            <td><div class="d-flex"><a href="{{route('author.edit',['author'=>$author->id])}}" class="btn btn-info" style="margin-right: 10px;"><i class="ti-pencil menu-icon"></i></a><form action="{{route('author.destroy',['author'=>$author->id])}}" method="post">@method('DELETE') @csrf <button class="btn btn-danger"><i class="ti-trash menu-icon"></i></button></form></div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
