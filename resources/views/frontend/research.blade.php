@extends('frontend.master')
@section('research')
    <div class="container" style="background: ivory">

        <div class="page-header">
            <h1>Our Researches</h1>
        </div>

        <div class="row">

            <div class="col-md-10">
                @foreach($researches as $data)
                <article id="">
                    <header>
                        <div class="meta">

                            Written by <span class="author">{{$data->title}}</span> <span class="date">1/30/16</span>
                        </div>
                        <h2>
                            <a href="">
                                {{$data->title}}</a></h2>
                    </header>
                    <div class="entry-content">
                        <a href="">
                            <img class="img-fluid" src="{{asset('/')}}storage/{{$data->img}}" alt="" class="img-fluid"  style="min-height: 530px; max-height: 600px; max-width: 100%; min-width: 900px"/>
                        </a>
                       <p>{!! substr_replace($data->description, "...", 340) !!}</p>

                        <a href="/singleresearch/{{$data->id}}" class="btn btn-primary" >Read More <span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>
                    <footer>
                    </footer>
                </article>
        @endforeach

            </div>
        </div>
    </div>
    <style>
        article {margin-bottom:2em;padding-bottom:2em;border-bottom:1px solid #ccc;}

        .social a {
            padding: 0 .5em;
        }

        .page-header {
            margin-bottom:2rem;
        }
    </style>
@endsection()
