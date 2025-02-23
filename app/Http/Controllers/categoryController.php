<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function showCategory()
    {
        $categories = Category::all();
        // dd($categories);
        return view('admin/category', ["categories" => $categories]);
    }
    public function addCategory(Request $request)
    {
        $request->validate([
            'categoryName' => "required",
            'categoryDescription' => "required"
        ]);
        // dd($request);
        Category::create([
            'name' => $request->categoryName,
            'description' => $request->categoryDescription
        ]);
        return redirect('/admin/category');
    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect("/admin/category");
    }
}
