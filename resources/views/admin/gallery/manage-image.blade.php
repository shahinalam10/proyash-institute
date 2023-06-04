@extends('admin.master')
@section('title')
    Manage image
@endsection
@section('content')
    <main class="page-content">
        <h6 class="mb-0 text-uppercase">{{ session('message','Manage image') }}</h6>
        <hr/>
        <div class="card border-top border-0 border-3 border-success">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead class="bg-primary">
                        <tr class="text-color text-center">
                            <th>Id</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($uploadimages as $uploadimage)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td class="text-center">
                                    <img src="{{asset($uploadimage->image)}}" alt="" style="height: 60px"; width="80px;">
                                </td>
                                <td class="text-center">
                                    <a href="{{route('edit-image',['id'=>$uploadimage->id])}}" class="btn btn-primary text-light">Edit</a>
                                    <form action="{{route('delete-image')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="upiamge_id" value="{{ $uploadimage->id }}">
                                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure !!')">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tbody>
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
