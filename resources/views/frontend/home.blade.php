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
        <h1 class="main-text">Love for humanity what you love for yourself</h1>
        <p class="text-center sub-text"><em class="first-line">Be like a diamond, precious and rare, not like a stone, found everywhere.</em><em class="next-line"> </em></p>
    </div>

    <div class="divider col-sm-12 col-xs-12 col-md-12">
        <div class="header-text"><span>Blog</span> News</div>
    </div>

    <section class="blog row">
        <div class="item col-md-4">
            <div class="blok-read-sm">
                <a href="single1.html" class="hover-image">
                    <img src="images/image1.jpg" alt="image">
                    <span class="layer-block"></span>
                </a>
                <div class="editor-choice">
                    <i class="fa fa-star"></i>
                    <a href="#">Editor’s Choice</a>
                </div>
                <div class="content-block">
                    <span class="point-caption bg-blue-point"></span>
                    <span class="bottom-line bg-blue-point"></span>
                    <h4>Discovering OM: A visit back to The Vedas</h4>
                    <p>Gregor then turned to look out the window at the dull weather. Drops of rain could pane,which made..</p>
                    <div class="button-main bg-fio-point">read more</div>
                    <div class="like-wrap">
                        <a href="#"><i class="fa fa-heart col-red"></i></a><span>224</span>
                        <a href="#"><i class="fa fa-comment col-green"></i></a><span>89</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-md-4">
            <div class="blok-read-sm">
                <a href="single1.html" class="hover-image">
                    <img src="images/image2.jpg" alt="image">
                    <span class="layer-block"></span>
                </a>
                <div class="editor-choice">
                    <i class="fa fa-star"></i>
                    <a href="#">Editor’s Choice</a>
                </div>
                <div class="content-block">
                    <span class="point-caption bg-blue-point"></span>
                    <span class="bottom-line bg-blue-point"></span>
                    <h4>Discovering OM: A visit back to The Vedas</h4>
                    <p>Gregor then turned to look out the window at the dull weather. Drops of rain could pane,which made..</p>
                    <div class="button-main bg-fio-point">read more</div>
                    <div class="like-wrap">
                        <a href="#"><i class="fa fa-heart col-red"></i></a><span>224</span>
                        <a href="#"><i class="fa fa-comment col-green"></i></a><span>89</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-md-4">
            <div class="blok-read-sm">
                <a href="single1.html" class="hover-image">
                    <img src="images/image3.jpg" alt="image" style="height: 390px">
                    <span class="layer-block"></span>
                </a>
                <div class="editor-choice">
                    <i class="fa fa-star"></i>
                    <a href="#">Editor’s Choice</a>
                </div>
                <div class="content-block">
                    <span class="point-caption bg-blue-point"></span>
                    <span class="bottom-line bg-blue-point"></span>
                    <h4>Discovering OM: A visit back to The Vedas</h4>
                    <p>Gregor then turned to look out the window at the dull weather. Drops of rain could pane,which made..</p>
                    <div class="button-main bg-fio-point">read more</div>
                    <div class="like-wrap">
                        <a href="#"><i class="fa fa-heart col-red"></i></a><span>224</span>
                        <a href="#"><i class="fa fa-comment col-green"></i></a><span>89</span>
                    </div>
                </div>
            </div>
        </div>
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
@endsection()
