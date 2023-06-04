@extends('admin.master')
@section('title')
    Add slider
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase text-dark"> Image Slider form</h6>
            <hr/>
            <div class="card border-top border-0 border-3 border-success">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0 text-dark">{{session('message','Add new slider')}}</h5>
                        </div>
                        <hr/>
                        <form action="{{route('new-slide')}}" method="post" enctype="multipart/form-data">
                            @csrf

                        <div class="row mb-3">
                            <label for="Title" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="Title" name="title" placeholder="Enter news title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="slide_Content" class="col-sm-3 col-form-label">Slide content</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="slide_Content" name="slide_content" placeholder="Content description">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image_slide" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image_slide" name="image">
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

