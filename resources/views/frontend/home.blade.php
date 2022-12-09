@extends('frontend.master')
@section('home')
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/slider1.jpg" alt="" style="width: 1970px; height: 730px;">
                <div class="carousel-caption">
                    Make Donation
                </div>
            </div>
            <div class="item">
                <img src="images/slider2.jpg" alt="" style="width: 1970px; height: 730px;">
                <div class="carousel-caption">
                    Be a Donator
                </div>
            </div>
            <div class="item">
                <img src="images/slider3.jpg" alt="" style="width: 1970px; height: 730px;">
                <div class="carousel-caption">
                    Be a volunteer
                </div>
            </div>
        </div>

        <div class="float-sm">
            <div class="fl-fl float-fb">
                <!--     <i class="fa fa-box-heart"></i> -->
                <a href="/donate" target="_blank">Donate Us</a>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container header-start text-center">
        <div class="heading-icon">
            <i class="fa fa-3x fa-heart"></i>
        </div>
        <h1 class="main-text">{{$home_messeges[0]->title}}</h1>
        <p class="text-center sub-text"><em class="first-line">{{$home_messeges[0]->text}}</em><em class="next-line"> </em></p>
    </div>

    <div class="divider col-sm-12 col-xs-12 col-md-12">
        <div class="header-text"><span>Blog</span> News</div>
    </div>

    <section class="blog row">
        @foreach($home_blogs as $home_blog)
            <div class="item col-md-4">
                <div class="blok-read-sm">
                    <a href="single1.html" class="hover-image">
                        <img src="images/image1.jpg" alt="image">
                        <span class="layer-block"></span>
                    </a>
                    <div class="editor-choice">
                        <i class="fa fa-star"></i>
                        <a href="#">{{$home_blog->titile}}</a>
                    </div>
                    <div class="content-block">
                        <span class="point-caption bg-blue-point"></span>
                        <span class="bottom-line bg-blue-point"></span>
                        <h4>{{$home_blog->titile}}</h4>
                        <p>{{$home_blog->description}}</p>
                        <div class="button-main bg-fio-point">read more</div>
                        <div class="like-wrap">
                            <a href="#"><i class="fa fa-heart col-red"></i></a><span>224</span>
                            <a href="#"><i class="fa fa-comment col-green"></i></a><span>89</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md-4 text-center subscribe-form">
            <div class="subscribe col-md-12 mx-auto">
                <h4>Subscribe to Newsletter</h4>
                <div class="email-field">
                    <form action="http://demo.nrgthemes.com/">
                        <div class="email-input">
                            <input type="email" placeholder="Enter your email..." required>
                            <i class="fa fa-check col-green"></i>
                        </div>
                        <button type="submit" class="button-main bg-green">Submit</button>
                    </form>
                    <span>We never spam :)</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <style>
        .fl-fl {
            background: #000000;
            text-transform: uppercase;
            letter-spacing: 3px;
            padding: 4px;
            width: 190px;
            position: fixed;
            right: -160px;
            z-index: 1000;
            font: normal normal 10px Arial;
            -webkit-transition: all .25s ease;
            -moz-transition: all .25s ease;
            -ms-transition: all .25s ease;
            -o-transition: all .25s ease;
            transition: all .25s ease;
        }

        .fa {
            font-size: 20px;
            color: #fff;
            padding: 10px 0;
            width: 40px;
            margin-left: 8px;
        }

        .fl-fl:hover {
            right: 0;
        }

        .fl-fl a {
            color: #fff !important;
            text-decoration: none;
            text-align: center;
            line-height: 43px!important;
            vertical-align: top!important;
        }

        .float-fb {
            top: 160px;
        }
    </style>
@endsection()
