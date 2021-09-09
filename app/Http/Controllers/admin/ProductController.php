<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();
        $products->load('category');
        return view('admin.products.index', compact( 'products'));
    }

    public function create()
    {
        if (Auth::user()){
            $categories = CategoryModel::all();
            return view('admin/products/create', compact('categories'));
        } else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        if (Auth::user()){
            ProductModel::destroy($id);
            return redirect(route('products.index'));
        } else {
            return redirect()->back();
        }

    }

    public function save(ProductFormRequest $request)
    {
        $model = new ProductModel();
        $model->fill($request->all());
        if ($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('public/uploads/products', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('products.index'));
    }

    public function change($id)
    {
        if (Auth::user()){
            $product = ProductModel::find($id);
            if (!$product){
                return redirect()->back();
            }
            $categories = CategoryModel::all();
            return view('admin.products.change', compact('product','categories'));
        } else {
            return redirect()->back();
        }

    }

    public function saveChange($id, Request $request)
    {
        $model = ProductModel::find($id);
        if(!$model){
            return redirect(route('products.index'));
        }
        $model->fill($request->all());
        if($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('public/uploads/products', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('products.index'));
    }
}
