@extends('frontEnd.master')
@section('title')
    Notice Board
@endsection
@section('content')

    <!--NOTICE BOARD start-->
    <div class="row" style="width: 100%;margin:0px auto">
        <div class="section-title">
            <h3 class="text-center mt-4 mb-5">NOTICE BOARD</h3>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr class="text-center">
                <th>Sl</th>
                <th>Title</th>
                <th>File</th>
                <th>Publish date</th>
            </tr>
            </thead>
            <tbody>
            @php $i=1 @endphp
            @foreach($proyashnotice as $notice)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$notice->title}}</td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-primary">{{$notice->notice_file}}</a>
                </td>
                <td class="text-center">{{$notice->date}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!--NOTICE BOARD end-->
@endsection
