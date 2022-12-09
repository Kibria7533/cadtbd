@extends('frontend.master')
@section('research')
    <div class="container">

        <div class="page-header">
            <h1>Our Researches <small>CADAT</small></h1>
        </div>

        <div class="row">

            <div class="col-md-8">
                @foreach($researches as $data) @endforeach
                <article id="">
                    <header>
                        <div class="meta">

                            Written by <span class="author">{{$data->title}}</span> <span class="date">1/30/16</span> | <span class="comments"><span class="badge">4</span> Comments</span>
                        </div>
                        <h2>
                            <a href="">
                                {{$data->title}}</a></h2>
                    </header>
                    <div class="entry-content">
                        <a href="">
                            <img src="storage/{{$data->img}}" alt="" class="img-fluid" />
                        </a>
                        <p class="lead"> {{$data->description}} &hellip;</p>

                        <a href="#" class="btn btn-primary">Read More <span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>
                    <footer>
                    </footer>
                </article>

                <nav>
                    <ul class="pagination">
                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                    </ul>
                </nav>


            </div>
            <aside class="col-md-4">

                <div class="card mb-3">
                    <h3 class="card-header mb-3">Reach Us</h3>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Join Us</button>
                            </div>

                        </div>
                    </form>

                </div>

                <h3>Our Recent Papers</h3>
                <div class="list-group  mb-3">
                    @foreach($researches as $data)
                        <a href="#" class="list-group-item active">
                            <h4 class="list-group-item-heading">{{$data->title}}</h4>
                            <p class="list-group-item-text">
                                {{$data->description}}
                            </p>
                        </a>
                    @endforeach
                </div>






                <div class="container">
                    <h3>Follow Us</h3>
                    <div class="social">
                        <a href=""><i class="fa fa-3x fa-facebook-square"></i></a>
                        <a href=""><i class="fa fa-3x fa-twitter-square"></i></a>
                        <a href=""><i class="fa fa-3x fa-linkedin-square"></i></a>
                        <a href=""><i class="fa fa-3x fa-google-plus-square"></i></a>
                    </div>

                </div>



            </aside>
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
