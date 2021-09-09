@extends('admin.layout.index')
@section('title', 'Create Products')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example4" class="display table-responsive-lg min-w850">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Products</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{count($item->products)}}</td>
                                    <td>
                                        <img src="{{asset('storage/'. $item->image)}}" width="80">
                                    </td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('category.change', [$item->id])}}">Change</a>
                                                <a class="dropdown-item" href="{{route('category.delete', [$item->id])}}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
