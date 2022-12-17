@extends('frontend.master')
@section('press')
<div class="container">
    <div class="row justify-content-center headline-container" style="padding-top:20px">
        <div class="col-8 headline">
            <h1 class="hed">Our Insight, Your Advantage</h1>
{{--            <p class="dek">WSJ Pro is a premium suite of products for elite practitioners, powered by The Wall Street Journal’s peerless reporting and Dow Jones’ unrivaled data.</p>--}}
        </div>
    </div>
    <div class="card-deck">
  @foreach($presses as $data) @endforeach
        <div class="card my-3">
            <a class="btn card-link" data-url="https://wsj.com/pro/ai">{{$data->title}}</a>
            <img src="storage/{{$data->img}}" class="card-img-top">
            <div class="card-body d-flex flex-column">
                <h4 class="card-title">{{$data->title}}</h4>
                <p class="card-text">{!! $data->description !!}</p>
                <button class="btn btn-primary mt-auto" type="button" data-url="https://www.wsj.com/articles/ai-machine-learning-jobs-among-highest-paid-in-tech-11548325180">Read</button>
            </div>
        </div>
    </div>
</div>
    <style>
        .headline-container {
            padding-top: 20px;
        }
        .headline-container .headline {
            text-align: center;
        }
        .headline-container .headline .hed {
            font-family: "Whitney SSm", Helvetica, Arial, sans-serif;
        }
        .card {
            border-color: #c7b78f;
            border-radius: 0;
            border: none;
        }
        .card img {
            padding: 10px;
        }
        .card .card-link {
            font-weight: 600;
            text-transform: uppercase;
            font-family: "Whitney SSm", Helvetica, Arial, sans-serif;
            border-bottom: 1px solid #c7b78f;
            border-radius: 0;
        }
        .card .card-title, .card .card-text {
            font-family: "Whitney SSm", Helvetica, Arial, sans-serif;
        }
        .card .card-text {
            font-weight: 300;
        }

        .btn-primary {
            background-color: #328890;
            border: none;
            border-radius: 0;
            cursor: pointer;
            text-transform: uppercase;
            font-size: 12px;
            padding: 8px 12px;
        }
        .btn-primary:hover {
            background-color: black;
        }

        @media (min-width: 0) {
            .card-deck .card {
                flex: 0 0 calc(100% - 30px);
            }
        }
        @media (min-width: 576px) {
            .card-deck .card {
                flex: 0 0 calc(50% - 30px);
            }
        }
        @media (min-width: 768px) {
            .card-deck .card {
                flex: 0 0 calc(50% - 30px);
            }
        }
        @media (min-width: 992px) {
            .card-deck .card {
                flex: 0 0 calc(33.3333333333% - 30px);
            }
        }
        @media (min-width: 1200px) {
            .card-deck .card {
                flex: 0 0 calc(33.3333333333% - 30px);
            }
        }
    </style>
@endsection()
