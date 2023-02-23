@extends('frontend.master')
@section('career')
<div class="container table-responsive py-5 my-5" style="font-size: 21px; min-height: 600px">
{{--    @dd($careers);--}}
    <table class="table table-bordered table-hover text-center" >
        <thead>
        <tr>

            <th scope="col">Job Title</th>
            <th scope="col">Location</th>
            <th scope="col">Last Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($careers as $data)
            <tr>
                <td>{{$data->job_title}}</td>
                <td>{{$data->location}}</td>
                <td>{{$data->last_date}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
    <style>
        table {
            /*border-collapse: separate;*/
            border-spacing: 0 10px;
        }
    </style>
@endsection()
