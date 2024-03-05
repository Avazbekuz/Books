@extends('admin.auth')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card-body p-0 b" style="display: flex; flex-wrap: wrap;">
                <div class="card" style="width: 18rem; margin-right: 20px;">
                    <div class="card-body">
                        <h1 class="card-title" style="font-size: 28px;margin-bottom: 25px;">Kitoblar soni</h1>
                        <p class="card-text" style="font-size: 30px; margin-bottom: 20px;">{{$count['book_count']}}</p>
                        <a href="#" class="card-link">Kitoblar</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem; margin-right: 20px;">
                    <div class="card-body">
                        <h1 class="card-title" style="font-size: 28px;margin-bottom: 25px;">Ko'ruvchilar soni</h1>
                        <p class="card-text" style="font-size: 30px; margin-bottom: 20px;">{{$count['show_count']}}</p>
                        <a href="#" class="card-link">Kitoblar</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem; margin-right: 20px;">
                    <div class="card-body">
                        <h1 class="card-title" style="font-size: 28px;margin-bottom: 25px;">Yuklovchilar soni</h1>
                        <p class="card-text" style="font-size: 30px; margin-bottom: 20px;">{{$count['download_count']}}</p>
                        <a href="#" class="card-link">Kitoblar</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
