@extends('admin.layout.index')
@section('title', 'Change Banner')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/products">Products</a></li>
            <li class="breadcrumb-item active"><a >Change</a></li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="basic-form">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control input-default" name="title" value="{{$banner->title}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control input-default" name="heading" value="{{$banner->heading}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="file_upload" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div><img src="{{asset('storage/'. $banner->image)}}" alt="" width="200"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn light btn-secondary">Change</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection
