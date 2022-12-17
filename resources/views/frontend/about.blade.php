@extends('frontend.master')
@section('about')
    <div class="wrp">
        <div class="paralax"></div>
        <div class="container-fluid" style="background-color: white; margin-top: 50px;">
            <div class="row">
                <div class="container">
                    <div class="col-xs-3">
                        <div class="d-flex justify-content-center" style="margin-left: 50%">
                            <div >
                                <ul class="nav nav-tabs tabs-left">
                                    @foreach($abouts as $key=>$data)
                                        <li class="{{$key == 0 ?"active":""}}" ><a href="#tab{{$data->id}}" data-toggle="tab">{{$data->Action_key}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-9">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            @foreach($abouts as $key=>$data)
                                <div class="tab-pane {{$key == 0 ?"active":""}}" id="tab{{$data->id}}">
                                    {!! $data->description !!}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* .navbar{
            background: #1f365c;
            height: 90px;
        }
        #navbarSupportedContent{
            background: #1f365c;
            min-height: 50px;
        } */


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
        .tabs-left {
            border-bottom: none;
            padding-top: 2px;
            border-right: 1px solid #ddd;
        }
        .tabs-left>li {
            float: none;


        }
        .tabs-left>li a{
            background: #1f365c;
            border: none;
            border-radius: 6px;
        }
        .tabs-left>li.active>a,
        .tabs-left>li.active>a:hover,
        .tabs-left>li.active>a:focus {
            border:none;
            background:#009bdf;
        }
        .tabs-left>li>a {
            border-radius: 4px 0 0 4px;
            margin-right: 0;
            display:block;
        }
        .tabs-left{
            border:none
        }

    </style>
    <style>
        /* .wrp {
            background-size: cover;
            background-repeat: repeat;
            background-color: brown;
            background-image: url(https://setu.ngo/wp-content/uploads/2019/05/setu_about_final2.jpg);
            background-attachment: scroll;
            min-width: 1808px;
            left: 0px;
            width: 1808px;
            background-position: 50% 173px;
        } */
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection()
