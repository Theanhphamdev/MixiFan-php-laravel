@extends('admin.layout.index')
@section('title', 'Create Products')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/products/list">Categories</a></li>
            <li class="breadcrumb-item active"><a href="/products/create">Create</a></li>
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
                                <label>Name</label>
                                <input type="text" class="form-control input-default" name="name" placeholder="category name">
                            </div>
                            @error('name')
                            <p style="color: red">{{$message}}</p>
                            @enderror
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
                                @error('file_upload')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn light btn-secondary">Create category</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection
