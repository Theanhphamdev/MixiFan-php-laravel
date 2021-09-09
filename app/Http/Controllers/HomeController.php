<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $banner = BannerModel::all();
        $products = ProductModel::all();
        $category = CategoryModel::offset(0)->limit(4)->get();
        return view('website.homepage', compact('banner','products','category'));
    }

    public function about()
    {
        return view('website.about');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function shop(Request $request)
    {
        $pageSize = config('common.default_page_size');
        $productQuery = ProductModel::where('name', 'like', "%".$request->keyword."%");
        if($request->has('cate_id') && $request->cate_id > 0){
            $productQuery->where('cate_id', $request->cate_id);
        }
        if($request->has('order_by') && $request->order_by > 0){
            if($request->order_by == 1){
                $productQuery->orderBy('name');
            }else if($request->order_by == 2){
                $productQuery->orderByDesc('name');
            }else if($request->order_by == 3){
                $productQuery->orderBy('price');
            }else{
                $productQuery->orderByDesc('price');
            }
        }
        $cates = CategoryModel::all();
        $cates->load('products');
        $products = $productQuery->paginate($pageSize);
        $products->appends($request->except('page'));
        return view('website.shop',compact('cates','products'));
    }

    public function detail($id)
    {
        $comments = DB::table('comments')->where('product_id', $id)->get();
        $product = ProductModel::find($id);
        $product->load('category');
        $cateId = $product->cate_id;
        $products_cate = DB::table('products')->where('cate_id', $cateId)->get();
        return view('website.detail',compact('product', 'products_cate', 'comments'));
    }

    public function saveComment($id, Request $request)
    {
        $model = new CommentModel();
        $model->product_id = $id;
        $model->name = $request->name;
        $model->email = $request->email;
        $model->review = $request->review;
        $model->save();
        return redirect()->back();
    }

}
