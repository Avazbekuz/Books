@extends('books.auth')
@section('main')
    <section id="mu-hero" style="background-color: white;">
        <div class="container">
            <form class="filtr_form" method="get" action="{{route('book.search')}}">
                <div class="input-box">
                    <label>Qidiruv</label><br>
                    <input type="text" name="value" placeholder="Qidiruv so`zini kiriting" class="input" required>
                </div>
                <div class="buttons">
                    <button class="btn search-btn"><svg class="search_icon"><path d="M2.99625 3.99679H21.0037" stroke="white" stroke-width="1.5" stroke-linecap="round"></path><path d="M2.99625 10.9997H7.99833" stroke="white" stroke-width="1.5" stroke-linecap="round"></path><path d="M2.99625 18.0026H7.99833" stroke="white" stroke-width="1.5" stroke-linecap="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.7516 17.4772C18.0997 17.4772 20.0033 15.5736 20.0033 13.2254C20.0033 10.8772 18.0997 8.97363 15.7516 8.97363C13.4034 8.97363 11.4998 10.8772 11.4998 13.2254C11.4998 15.5736 13.4034 17.4772 15.7516 17.4772Z" stroke="white" stroke-width="1.5"></path><path d="M18.5027 16.4766L21.0038 19.0029" stroke="white" stroke-width="1.5" stroke-linecap="round"></path></svg>Qidiruv</button>
                </div>
            </form>
        </div>
    </section>
    <main role="main">
        <!-- Start Counter -->
        <section id="mu-counter">
            <div class="books">
                <div class="category">
                    <div class="select">
                        <h1 class="select-title">Mualliflar</h1>
                        <hr>
                        <ul class="select-list">
                            @foreach($all_authors as $all_author)
                                <li class="list-iteam"><a class="list-iteam" href="{{route('category.books',['name'=>'author','id'=>$all_author->id])}}">{{$all_author->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="select">
                        <h1 class="select-title">Toifalar</h1>
                        <hr>
                        <ul class="select-list">
                            @foreach($all_category as $all_categori)
                                <li class="list-iteam"><a class="list-iteam" href="{{route('category.books',['name'=>'category','id'=>$all_categori->id])}}">{{$all_categori->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="select">
                        <h1 class="select-title">Janrlar</h1>
                        <hr>
                        <ul class="select-list">
                            @foreach($all_genres as $all_genre)
                                <li class="list-iteam"><a class="list-iteam" href="{{route('category.books',['name'=>'genre','id'=>$all_genre->id])}}">{{$all_genre->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @if($all_books->isEmpty())
                    <div class="grid-cards">
                        <div class="card">
                            <h1>Ma'lumotlar yo'q</h1>
                        </div>
                    </div>
                @else
                    <div class="grid-cards">
                        @foreach($all_books as $all_book)
                            <div class="card">
                                <img src="{{url("storage/".$all_book->photo)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title d-flex">Nomi: {{$all_book->name}}</h5>
                                    <a class="btn btn-success" href="{{route('show.book',['book'=>$all_book->id])}}">Ko'rish</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div style="width: 200px;margin-left: auto;">{{$all_books->links()}}</div>
        </section>
    </main>
@endsection
