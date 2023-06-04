@extends('admin.master')
@section('title')
    Manage administrative body
@endsection
@section('content')
    <main class="page-content">
        <h6 class="mb-0 text-uppercase">Manage administrative</h6>
        <hr/>
        <div class="card border-top border-0 border-3 border-success">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead class="bg-primary">
                        <tr class="text-color text-center">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($administrativepersons as $administrativeperson)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $administrativeperson->name }}</td>
                            <td>{{ $administrativeperson->designation }}</td>
                            <td class="text-center">
                                <img src="{{ asset($administrativeperson->image) }}" alt="" style="height: 60px; width: 80px">
                            </td>
                            <td class="text-center">
                                <a href="{{route('edit-person',['id'=>$administrativeperson->id])}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('delete-person')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="person_id" value="{{ $administrativeperson->id }}">
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
