@extends('frontend.master')
@section('program')
    <div class="container mb-5">
        <h3>Emergence of CADT</h3>
        <p>
            CADT is patronized by a group of philanthropists, activists and
            reputed corporate houses of Bangladesh in response of the
            greater societal responsibility. It aims to explore value-based
            knowledge and skills to devise human and social progress in line
            of the national and community development agenda. CADT manifests
            its major scope of work as follows.
        </p>
    </div>
<div class="container" style="min-height: 800px">
    <div class="tab" style="height: auto">
        @foreach($programs as $data)
            <button class="tablinks" onclick="openTab(event, {{$data->id}})" id="defaultOpen">{{$data->title}}</button>
        @endforeach
    </div>
    @foreach($programs as $data)
        <div id="{{$data->id}}" class="tabcontent" style="height: max-content">
            <h3>{{$data->title}}</h3>
            <hr/>
            <p>
                <br>
                {!! $data->body !!}</p>
        </div>
    @endforeach
</div>

<style>
    * {box-sizing: border-box}
    body {font-family: "Lato", sans-serif;}

    .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #dfe8eb;
        width: 30%;
        height: 400px;
        border-radius: 10px 0 0 10px;
    }

    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 22px 16px;
        width: 90%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
        margin: 5%;
        border-radius: 4px;
    }

    .tab button:hover {
        background-color: #bee9f7;
    }

    .tab button.active {
        background-color: #6398a8;
    }

    .tabcontent {
        float: left;
        padding: 0px 12px;
        /*border: 1px solid #ccc;*/
        width: 70%;
        border-left: none;
        height: 400px;
        border-radius: 0 10px 10px 0;
    }
</style>
    <script>
        function openTab(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>
@endsection()
