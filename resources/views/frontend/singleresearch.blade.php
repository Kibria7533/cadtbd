@extends('frontend.master')
@section('singleresearch')
    <div class="container">
        <div class="row justify-content-center d-flex" style="background: white;min-height: 700px;margin-top: 60px;">
            <div class="col-12 d-flex text-center flex-column">
              <div>
                   <img  class="img-fluid" src="{{asset('/')}}storage/{{$research[0]->img}}" alt="home_blog" style="width: 400px; height: 500px;">
              </div>

                <h1 style="margin-top: 20px; font-weight: 900">{{$research[0]->title}}</h1>
                <p style="color: black; font-weight: 800; font-size: 18px">{!! $research[0]->description !!}</p>
            </div>

        </div>
    </div>
@endsection()
