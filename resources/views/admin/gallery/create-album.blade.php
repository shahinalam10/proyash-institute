@extends('admin.master')
@section('title')
    Create Album
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase text-dark"> Create Album with image</h6>
            <hr/>
            <div class="card border-top border-0 border-3 border-success">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0 text-dark">{{session('message','Add new slider')}}</h5>
                        </div>
                        <hr/>
                        <form action="{{route('new-album')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="albumName" class="col-sm-3 col-form-label">Album name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="albumName" name="name" placeholder="Enter album name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="albumImage" class="col-sm-3 col-form-label">Album image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="albumImage" name="image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck4">
                                        <label class="form-check-label" for="gridCheck4">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" value="submit" class="btn btn-primary px-5">Register</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

