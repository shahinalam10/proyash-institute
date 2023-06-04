@extends('admin.master')
@section('title')
    Manage news ticker
@endsection
@section('content')
    <main class="page-content">
        <h6 class="mb-0 text-uppercase">Manage news ticker</h6>
        <hr/>
        <div class="card border-top border-0 border-3 border-success">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead class="bg-primary">
                        <tr class="text-color">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>

                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>

                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <style>
        .text-color th{
            color: white !important;
        }
    </style>
@endsection
