<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerFormRequest;
use App\Models\BannerModel;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = BannerModel::all();
        return view('admin.banner.index', compact('banner'));
    }

    public function create()
    {
        return view('admin/banner/create');
    }

    public function delete($id)
    {
        BannerModel::destroy($id);
        return redirect(route('banner.index'));
    }

    public function save(Request $request)
    {
        $model = new BannerModel();
        $model->title = $request->title;
        $model->heading = $request->heading;
        if ($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('public/uploads/banner', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('banner.index'));
    }

    public function change($id)
    {
        $banner = BannerModel::find($id);
        if (!$banner){
            return redirect()->back();
        }
        return view('admin.banner.change', compact('banner'));
    }

    public function saveChange($id, Request $request)
    {
        $model = BannerModel::find($id);
        if(!$model){
            return redirect(route('banner.index'));
        }
        $model->title = $request->title;
        $model->heading = $request->heading;
        if($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('public/uploads/banner', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('banner.index'));
    }
}
