@extends('admin.layout.index')
@section('title', 'Change Products')
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
                        <div class="col-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control input-default" name="name" value="{{$product->name}}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control input-default" name="price" value="{{$product->price}}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" class="form-control input-default" name="quantity" value="{{$product->quantity}}">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Weight</label>
                                <input type="text" class="form-control input-default" name="weight" value="{{$product->weight}}">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Length</label>
                                <input type="text" class="form-control input-default" name="length" value="{{$product->length}}">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Height</label>
                                <input type="text" class="form-control input-default" name="height" value="{{$product->height}}">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Width</label>
                                <input type="text" class="form-control input-default" name="width" value="{{$product->width}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea class="form-control" rows="4" name="short_description">{{$product->short_description}}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="summernote" name="description" >
                                    {{$product->description}}
                                </textarea>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Category</label>
                                <select name="cate_id" class="form-control default-select form-control-lg">
                                    @foreach($categories as $item)
                                        <option
                                            @if($item->id == $product->cate_id) selected @endif
                                        value="{{$item->id}}">
                                            {{$item->name}}
                                        </option>
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
                                <div><img src="{{asset('storage/'. $product->image)}}" alt="" width="200"></div>
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
