@extends('admin.master')
@section('title')
    Manage notice
@endsection
@section('content')
    <main class="page-content">
        <h6 class="mb-0 text-uppercase">{{session('message','Manage notice and file')}}</h6>
        <hr/>
        <div class="card border-top border-0 border-3 border-success">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead class="bg-primary">
                        <tr class="text-color text-center">
                            <th>Id</th>
                            <th>Title</th>
                            <th>File</th>
                            <th>Published Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($proyashnotices as $proyashnotice)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $proyashnotice->title }}</td>
                            <td class="text-center">
                                <img src="{{asset( $proyashnotice->notice_file )}}" alt="" style="height: 70px; width: 80px;">
                            </td>
                            <td class="text-center">{{ $proyashnotice->date }}</td>
                            <td class="text-center">
                                <a href="{{route('edit-notice',['id'=>$proyashnotice->id])}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('delete-notice')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="notice_id" value="{{ $proyashnotice->id }}">
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
