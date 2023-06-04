@extends('admin.master')
@section('title')
    Manage service
@endsection
@section('content')
    <main class="page-content">
        <h6 class="mb-0 text-uppercase">{{session('message','manage service')}}</h6>
        <hr/>
        <div class="card border-top border-0 border-3 border-success">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead class="bg-primary">
                        <tr class="text-color text-center">
                            <th>Id</th>
                            <th>Title</th>
                            <th>Service content</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($proyashservices as $proyashservice)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $proyashservice->title }}</td>
                            <td>{{ $proyashservice->service_content }}</td>
                            <td class="text-center">
                                <img src="{{ asset($proyashservice->image ) }}" alt="" style="height: 60px; width:80px;">
                            </td>
                            <td class="text-center">
                                <a href="{{route('edit-service',['id'=>$proyashservice->id])}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('delete-service')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="service_id" value="{{ $proyashservice->id }}">
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

