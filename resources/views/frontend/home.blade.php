@extends('frontend.master')
@section('home')
    <div class="container-fluid my-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="display: flex; text-align: center">
                <div class="carousel-item active">
                    <img class="img-fluid" src="{{asset('/')}}storage/{{$home_sliders[0]->img}}" class="d-block w-100"
                         alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="{{asset('/')}}storage/{{$home_sliders[1]->img}}" class="d-block w-100"
                         alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="{{asset('/')}}storage/{{$home_sliders[2]->img}}" class="d-block w-100"
                         alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                    data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                    data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
    <div class="container my-5">
        <section class="jumbotron text-center">
            <div class="container">
                <h1>{{$home_messeges[0]->title}}</h1>
                <p class="lead text-muted">
                    {{$home_messeges[0]->text}}
                </p>
            </div>
        </section>
    </div>
    <div class="container-fluid">
                <section class="our-webcoderskull padding-lg">
            <div class="container-fluid">
                <ul class="row home-blog" style="list-style: none">

                    @foreach($home_blogs as $home_blog)
                        <li class="col-12 col-md-6 col-lg-4 my-4">
                            <div class="cnt-block equal-hight" style="height: 450px;">
                                <img src="{{asset('/')}}storage/{{$home_blog->img}}"
                                     alt="" style="height: 50%; width: 100%">
                                <h4>{!! $home_blog->titile !!}</h4>
                                <p>{!! substr_replace($home_blog->description, "...", 220) !!}</p>
                                <button class="btn btn-primary rd"><a href="/singleblog/{{$home_blog->id}}"
                                                                   style="color: white; font-size: 18px;">Read More </a>
                                </button>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </section>
    </div>
@endsection()


