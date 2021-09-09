@extends('admin.layout.index')
@section('title', 'Create Banner')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/banner/list">Banner</a></li>
            <li class="breadcrumb-item active"><a>Create</a></li>
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
                                <input type="text" class="form-control input-default" name="title" placeholder="banner title">
                            </div>
                            @error('title')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control input-default" name="heading" placeholder="banner heading">
                            </div>
                            @error('heading')
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
                        <div class="col-12">
                            <button type="submit" class="btn light btn-secondary">Create</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection
