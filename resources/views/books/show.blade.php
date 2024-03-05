@extends('books.auth')
@section('main')
    <main role="main" class="main">
        <div class="container">
            <div class="show-icon" style="width: 600px;">
                <a href="{{route('all.books')}}"><svg class="sc-bczRLJ fFA-dUj" height="32" width="32"><path d="M6.66669 16.0002H25.3334" stroke="#74808C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.3334 9.3335L6.66669 16.0002" stroke="#74808C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.3334 22.6667L6.66669 16" stroke="#74808C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a>
                <h1>{{$book->name}}</h1>
            </div>
            <div class="book-show">
                <div class="book-left">
                    <img class="img" src="{{url('storage/'.$book->photo)}}" alt="rasm">
                </div>
                <div class="book-right">
                    <div class="book-right-text">
                        <div class="text-card">
                            <h1>Muallif: <span>{{$book->author->name}}</span></h1>
                        </div>
                        <div class="text-card">
                            <h1>Janr: <span>{{$book->genres->name}}</span></h1>
                        </div>
                        <div class="text-card">
                            <h1>Nashriyot: <span>O'zbekiston faylasuflari milliy jamiyati</span></h1>
                        </div>
                        <div class="text-card">
                            <h1>Yili: <span>{{$book->year}}</span></h1>
                        </div>
                    </div>
                    <p class="book-right-p">{{$book->text}}</p>
                    <div class="show-btn">
                        <p class="show_icon"><svg class="show-btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" fill="#000"></path></svg> {{$book->show_count}}</p>
                        <p class="show-download-icon"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" fill="black"></path></svg>{{$book->download_count==''? 0 : $book->download_count}}</p>
                    </div>
                    <div class="download">
                        <a class="btn btn-primary download_icon" href="{{route('book.download',['id'=>$book->id])}}"><svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" fill="white"></path> </svg>Yuklash</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
