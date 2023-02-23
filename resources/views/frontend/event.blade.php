@extends('frontend.master')

@section('event')
    <div class="container">
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">{{$events[0]->title}}</h1>
                <p class="lead my-3">{!! substr_replace($events[0]->description, "...", 220) !!}</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">
                        <button class="button-info"><a href="/singleevent/{{$events[0]->id}}">Read More.....</a>
                        </button>
                    </a></p>
            </div>
        </div>

        <div class="row mb-2 d-flex">
            @foreach($events as $data)
                <div class="col-md-6 col-lg-6">
                    <div
                        class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0">{{$data->title}}</h3>
                            <div class="mb-1 text-muted">{{$data->created_at}}</div>
                            <p class="card-text mb-auto">{!! substr_replace($data->description, "...", 220) !!}</p>
                            <a href="/singleevent/{{$data->id}}" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="{{asset('/')}}storage/{{$data->img}}" alt="" class="img-fluid"
                                 style="min-height: 530px; max-height: 600px; max-width: 100%; max-width: 900px"/>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection()
