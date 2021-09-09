@extends('admin.layout.index')
@section('title', 'Create Products')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/products/list">Products</a></li>
            <li class="breadcrumb-item active"><a href="/products/create">Create</a></li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="basic-form">
                <form action="" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control input-default" name="name" placeholder="product name">
                            </div>
                            @error('name')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control input-default" name="price" placeholder="product name" value="{{old('name')}}">
                            </div>
                            @error('price')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" class="form-control input-default" name="quantity" placeholder="product quantity">
                            </div>
                            @error('quantity')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Category</label>
                                <select name="cate_id" class="form-control default-select form-control-lg">
                                    @foreach($categories as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
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
                                @error('file_upload')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Weight</label>
                                <input type="text" class="form-control input-default" name="weight" placeholder="product weight">
                            </div>
                            @error('weight')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Length</label>
                                <input type="text" class="form-control input-default" name="length" placeholder="product length">
                            </div>
                            @error('length')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Height</label>
                                <input type="text" class="form-control input-default" name="height" placeholder="product height">
                            </div>
                            @error('height')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Width</label>
                                <input type="text" class="form-control input-default" name="width" placeholder="product width">
                            </div>
                            @error('width')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea class="form-control" rows="4" name="short_description"></textarea>
                            </div>
                            @error('short_description')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="summernote" name="description" >
                                </textarea>
                            </div>
                            @error('description')
                            <p style="color: red">{{$message}}</p>
                            @enderror

                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn light btn-secondary">Create product</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection
