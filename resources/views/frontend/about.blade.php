@extends('frontend.master')
@section('about')
    <div class="wrp">
        <div class="paralax"></div>
        <div class="container d-flex my-5">
            <div class="col-xs-3">
                <ul class="nav nav-tabs tabs-left d-flex flex-column mx-3">
                    @foreach($abouts as $key=>$data)
                        <a href="#tab{{$data->id}}" id="ltabe{{$data->id}}" onclick="setActive({{count($abouts)}} ,{{$data->id}})"
                           class="{{$key == 0 ?"active":""}} ml-auto tb"
                           data-toggle="tab">{{$data->Action_key}}</a>
                    @endforeach
                </ul>

            </div>
            <div class="col-xs-9">
                <!-- Tab panes -->
                <div class="tab-content custom-tab">
                    @foreach($abouts as $key=>$data)
                        <div class="tab-pane {{$key == 0 ?"active":""}}" id="tab{{$data->id}}">
                            {!! $data->description !!}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <style>

        .paralax {
            /* The image used */
            background-image: url(https://setu.ngo/wp-content/uploads/2019/05/setu_about_final2.jpg);

            /* Full height */
            min-height: 300px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
    <script>
        function setActive(x, t) {

            $(`#tab${x}`).addClass('active');
             $(`#ltabe${x}`).addClass('active');

            for (var i = 1; i <= x; i++) {
                if (i != t) {
                    $(`#tab${i}`).removeClass('active');
                     $(`#ltabe${i}`).removeClass('active');
                }
            }
        }
    </script>
@endsection()
