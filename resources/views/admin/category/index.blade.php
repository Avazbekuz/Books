@extends('admin.auth')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            {{$categorys->links()}}
            <a href="{{route('category.create')}}" class="btn btn-success" style="margin-bottom: 50px;">Qo'shish</a>
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
                    @foreach($categorys as $category)
                        <tr class="col-2">
                            <th>{{$categorys->currentPage()-1)*$categorys->perpage()+($loop -> index+1}}</th>
                            <td>{{$category->name}}</td>
                            <td><div class="d-flex"><a href="{{route('category.edit',['category'=>$category->id])}}" class="btn btn-info" style="margin-right: 10px;"><i class="ti-pencil menu-icon"></i></a><form action="{{route('category.destroy',['category'=>$category->id])}}" method="post">@method('DELETE') @csrf <button class="btn btn-danger"><i class="ti-trash menu-icon"></i></button></form></div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
