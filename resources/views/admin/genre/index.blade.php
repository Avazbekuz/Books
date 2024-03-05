@extends('admin.auth')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            {{$genres->links()}}
            <a href="{{route('genre.create')}}" class="btn btn-success" style="margin-bottom: 50px;">Qo'shish</a>
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
                    @foreach($genres as $genre)
                        <tr class="col-2">
                            <th>{{$genres->currentPage()-1)*$genres->perpage()+($loop -> index+1}}</th>
                            <td>{{$genre->name}}</td>
                            <td><div class="d-flex"><a href="{{route('genre.edit',['genre'=>$genre->id])}}" class="btn btn-info" style="margin-right: 10px;"><i class="ti-pencil menu-icon"></i></a><form action="{{route('genre.destroy',['genre'=>$genre->id])}}" method="post">@method('DELETE') @csrf <button class="btn btn-danger"><i class="ti-trash menu-icon"></i></button></form></div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
