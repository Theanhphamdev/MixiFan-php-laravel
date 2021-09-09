<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryModel::all();
        $categories->load('products');
        return view('admin.categories.index', compact('categories'));
    }

    public function delete($id)
    {

        if (Auth::user()){
            $pr = DB::table('products')->where('cate_id', $id)->get();
            foreach ($pr as $key){
                $idpr = $key->id;
                DB::table('comments')->where('product_id', $idpr)->delete();
            }
            DB::table('products')->where('cate_id', $id)->delete();
            CategoryModel::destroy($id);
            return redirect(route('category.index'));
        } else {
            return redirect()->back();
        }

    }

    public function create()
    {
        if (Auth::user()){
            return view('admin/categories/create');
        } else {
            return redirect()->back();
        }
    }

    public function save(Request $request)
    {
        $model = new CategoryModel();
        $model->name = $request->name;
        if ($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('public/uploads/categories', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('category.index'));
    }

    public function change($id)
    {
        if (Auth::user()){
            $category = CategoryModel::find($id);
            if (!$category){
                return redirect()->back();
            }
            return view('admin.categories.change', compact('category'));
        } else {
            return redirect()->back();
        }
    }

    public function saveChange($id, Request $request)
    {
        $model = CategoryModel::find($id);
        if(!$model){
            return redirect(route('category.index'));
        }
        $model->name = $request->name;
        if($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('public/uploads/products', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('category.index'));
    }
}
