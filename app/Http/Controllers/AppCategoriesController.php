<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\app_categories;
class AppCategoriesController extends Controller
{
    //

    public function getAllCategories(){
        $allCategories = app_categories::orderBy('created','desc')->paginate(3);
        return response()->json($allCategories,200);
    }

    public function getBySlug(Request $request){
        $categories = app_categories::where('slug',$request->slug)->get();
        return response()->json($categories,200);
    }
}
