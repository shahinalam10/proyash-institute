
@extends('admin.master')
@section('title')
    Manage slider
@endsection
@section('content')
    <main class="page-content">
        <h6 class="mb-0 text-uppercase">{{ session('message','Manage image slider') }}</h6>
        <hr/>
        <div class="card border-top border-0 border-3 border-success">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead class="bg-primary">
                        <tr class="text-color text-center">
                            <th>Id</th>
                            <th>Title</th>
                            <th>Slide content</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($imagesliders as $imageslider)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $imageslider->title }}</td>
                            <td>{{ $imageslider->slide_content }}</td>
                            <td class="text-center">
                                <img src="{{ asset( $imageslider->image ) }}" style="height: 60px; width: 80px">
                            </td>
                            <td class="text-center">
                                <a href="{{route('edit-slide',['id'=>$imageslider->id])}}" class="btn btn-primary text-light">Edit</a>
                                <form action="{{ route('delete-slider') }}" method="post" >
                                    @csrf

                                    <input type="hidden" name="slide_id" value="{{ $imageslider->id }}">
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
