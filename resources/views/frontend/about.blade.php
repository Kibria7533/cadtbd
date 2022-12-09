@extends('frontend.master')
@section('about')
    <div class="wrp">
        <div class="container-fluid" style="background-color: blue; margin-top: 140px;">
            <div class="row">
                <div class="container">
                    <div class="col-xs-3">
                        <ul class="nav nav-tabs tabs-left">
                            <li class="active"><a href="#ClientInfo" data-toggle="tab">Client Info</a></li>
                            <li><a href="#tab2" data-toggle="tab">Tab 2</a></li>
                            <li><a href="#tab3" data-toggle="tab">Tab 3</a></li>
                            <li><a href="#tab4" data-toggle="tab">Tab 4</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-9">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="ClientInfo">
                                <div>
                                    <div>
                                        <div>
                                            <label>
                                                Name:
                                            </label>
                                        </div>
                                        <div>
                                            Shubham
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <label>
                                                ID:
                                            </label>
                                        </div>
                                        <div>
                                            111
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <label>
                                                Date of Birth:
                                            </label>
                                        </div>
                                        <div>
                                            06/11/1991
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">Tab 2.</div>
                            <div class="tab-pane" id="tab3">Tab 3.</div>
                            <div class="tab-pane" id="tab4">Tab 4.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .tabs-left {
            border-bottom: none;
            padding-top: 2px;
            border-right: 1px solid #ddd;
        }
        .tabs-left>li {
            float: none;
            margin-bottom: 2px;
            margin-right: -1px;
        }
        .tabs-left>li.active>a,
        .tabs-left>li.active>a:hover,
        .tabs-left>li.active>a:focus {
            border-bottom-color: #ddd;
            border-right-color: transparent;
        }
        .tabs-left>li>a {
            border-radius: 4px 0 0 4px;
            margin-right: 0;
            display:block;
        }
    </style>
    <style>
        .wrp {
            background-size: cover;
            background-repeat: repeat;
            background-color: brown;
            background-image: url(https://setu.ngo/wp-content/uploads/2019/05/setu_about_final2.jpg);
            background-attachment: scroll;
            min-width: 1808px;
            left: 0px;
            width: 1808px;
            background-position: 50% 173px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection()
