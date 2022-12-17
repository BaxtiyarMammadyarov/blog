<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories= Category::paginate(5);
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $all = $request->all();
        $create = Category::create($all);
        if ($create) {
            return redirect()->back()->with('succsess', 'Bölmə əlavə edildi');
        } else {
            return redirect()->back()->with('error', 'Xəta baş verdi Bölmə əlavə edilmədi');
        }
    }
    public function edit($id){
        $category=Category::findOrFail($id);

        return view('admin.category.edit',compact('category'));
    }
    public function  update(Request $request, $id){
        $category = Category::findOrFail($id);
        $all = $request->all();
        $update = $category->update($all);
        if ($update) {
            return redirect()->back()->with('succsess', 'Bölmə yenilendi');
        } else {
            return redirect()->back()->with('error', 'Xəta baş verdi Bölmə yenilenmedi');
        }
    }
    public function delete($id){
        Category::destroy($id);
        return redirect()->back()->with('succsess', 'Bölmə silindi');
    }
}
