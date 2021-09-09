<?php

namespace App\Http\Controllers;

use App\Models\CommentModel;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function save()
    {
        dd($_POST);
        $model = new CommentModel();
        $model->product_id = $request->product_id;
        $model->name = $request->name;
        $model->email = $request->email;
        $model->review = $request->review;
        $model->save();
        return redirect()->back();
    }
}
