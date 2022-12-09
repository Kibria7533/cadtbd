@extends('frontend.master')

@section('event')
    <div class="divider col-sm-12 col-xs-12 col-md-12">
        <div class="header-text"> Our <span>Events</span></div>
    </div>

    <div id="exTab2" class="col-md-8 col-lg-7 col-lg-offset-1 col-md-offset-1">
        <ul class="nav nav-tabs">
            <li class="active">
                <a  href="#1" data-toggle="tab">Overview</a>
            </li>
            <li><a href="#2" data-toggle="tab">Recent Event</a>
            </li>
            <li><a href="#3" data-toggle="tab">Upcoming Event</a>
            </li>
        </ul>

        <div class="tab-content ">
            <div class="tab-pane active" id="1">
                @foreach($events as $data)
                    @if($data->tag == 1)
                        <div class="blog-event">
                            <div class="featured-img">
                                <img src="storage/{{$data->img}}" width="150" alt="">
                            </div>
                            <div class="featured-blog">
                                <h3>{{$data->title}}</h3>
                                <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>
                                <button class="button-info">Read More</button>
                                <button class="button-info">Register Now</button>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="tab-pane" id="2">
                @foreach($events as $data)
                    @if($data->tag == 2)
                        <div class="blog-event">
                            <div class="featured-img">
                                <img src="storage/{{$data->img}}" width="150" alt="">
                            </div>
                            <div class="featured-blog">
                                <h3>{{$data->title}}</h3>
                                <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>
                                <button class="button-info">Read More</button>
                                <button class="button-info">Register Now</button>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="tab-pane" id="3">
                @foreach($events as $data)
                    @if($data->tag == 3)
                        <div class="blog-event">
                            <div class="featured-img">
                                <img src="storage/{{$data->img}}" width="150" alt="">
                            </div>
                            <div class="featured-blog">
                                <h3>{{$data->title}}</h3>
                                <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>
                                <button class="button-info">Read More</button>
                                <button class="button-info">Register Now</button>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div id="sidebar" class="col-md-3 col-lg-3">
        @foreach($events_right as $data)
            <img src="storage/{{$data->img}}" width="100%">
            <h4><a href="#">{{$data->title}}</a></h4>
            <p>{{$data->description}}</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="sr-only">60% Complete</span>
                </div>
            </div>
        @endforeach
    </div>
@endsection()
