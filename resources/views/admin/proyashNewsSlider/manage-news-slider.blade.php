@extends('admin.master')
@section('title')
    Manage slider
@endsection
@section('content')
    <main class="page-content">
        <h6 class="mb-0 text-uppercase">{{session('message','Manage proyash news')}}</h6>
        <hr/>
        <div class="card border-top border-0 border-3 border-success">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead class="bg-primary">
                        <tr class="text-color text-center">
                            <th>Id</th>
                            <th>Title</th>
                            <th>News content</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($newssliders as $newsslider)
                        <tr>
                            <td> {{ $i++ }} </td>
                            <td>{{ $newsslider->title }}</td>
                            <td>{{ $newsslider->news_content }}</td>
                            <td class="text-center">
                                <img src="{{ asset( $newsslider->image ) }}" style="height: 60px; width: 80px">
                            </td>
                            <td class="text-center">
                                <a href="{{route('edit-news-slider',['id'=>$newsslider->id])}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('delete-news-slider')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="news_slider_id" value="{{ $newsslider->id }}">
                                    <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure !!')">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </main>
    <style>
        .text-color th{
            color: white !important;
        }
        .text-color a,form{
            display:inline-block;
        }
    </style>
@endsection
