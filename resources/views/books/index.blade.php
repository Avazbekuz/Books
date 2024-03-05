@extends('books.auth')
@section('main')
    <section id="mu-hero">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6 col-sm-push-6">
                    <div class="mu-hero-right">
                        <img src="{{url('/assets/images/ebook.png')}}" alt="Ebook img">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-sm-pull-6">
                    <div class="mu-hero-left">
                        <h1>Yillning eng zo'r va ko'p o'qilgan kitobi</h1>
                        <p><b>Alisher Navoiy</b> tomonidan yaratilga <b>Hamsa</b> asari bugungi kunga kelib eng ko'p sotilgan va o'qilgan kitob</p>
                        <a href="#" class="mu-primary-btn">Yuklash !</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
{{--    @dd($books);--}}
<main role="main">
    <!-- Start Counter -->
    <section id="mu-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-counter-area">
                        <div class="mu-counter-block">
                            <div class="row count">
                                <!-- Start Single Counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-single-counter">
                                        <i class="fa fa-files-o" aria-hidden="true"></i>
                                        <div class="counter-value" data-count="{{$count['book_count']}}">0</div>
                                        <h5 class="mu-counter-name">Kitoblar soni</h5>
                                    </div>
                                </div>
                                <!-- / Single Counter -->

                                <!-- Start Single Counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-single-counter">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <div class="counter-value" data-count="{{$count['show_count']}}">0</div>
                                        <h5 class="mu-counter-name">Ko'ruvchilar soni</h5>
                                    </div>
                                </div>
                                <!-- / Single Counter -->

                                <!-- Start Single Counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-single-counter">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <div class="counter-value" data-count="{{$count['download_count']}}">0</div>
                                        <h5 class="mu-counter-name">Yuklaganlar soni</h5>
                                    </div>
                                </div>
                                <!-- / Single Counter -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="index-grid">
                <h1><a href="#">Yangi kitoblar</a></h1>
                <div class="index-cards">
                    @foreach($new_books as $new_book)
                        <div class="card">
                            <img src="{{$new_book->photo}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nomi: {{$new_book->name}}</h5>
                                <a class="btn btn-success" href="{{route('show.book',['book'=>$new_book->id])}}">Ko'rish</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <h1><a href="#">Ko'p ko'rilganlar</a></h1>
                <div class="index-cards">
                    @foreach($show_books as $show_book)
                        <div class="card">
                            <img src="{{$show_book->photo}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nomi: {{$show_book->name}}</h5>
                                <a class="btn btn-success" href="{{route('show.book',['book'=>$new_book->id])}}">Ko'rish</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

</main>
@endsection
