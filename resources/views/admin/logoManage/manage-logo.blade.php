@extends('admin.master')
@section('title')
    Manage logo
@endsection
@section('content')
    <main class="page-content">
        <h6 class="mb-0 text-uppercase">Manage logo datatable</h6>
        <hr/>
        <div class="card border-top border-0 border-3 border-success">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead class="bg-primary">
                        <tr class="text-color text-center">
                            <th>Id</th>
                            <th>Logo</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($proyashlogos as $proyashlogo)
                        <tr class="text-center">
                            <td>{{ $i++ }}</td>
                            <td>
                                <img src="{{asset($proyashlogo->logo)}}" alt="" style="height: 60px; width: 80px">
                            </td>
                            <td class="text-center">
                                <a href="{{route('edit-logo',['id'=>$proyashlogo->id])}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('delete-logo')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="logo_id" value="{{ $proyashlogo->id }}">
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
