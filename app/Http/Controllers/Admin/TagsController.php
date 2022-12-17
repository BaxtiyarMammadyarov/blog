<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use http\Env\Request;

class TagsController extends Controller
{
    public function index()
    {
        $tags= Tag::paginate(5);
        return view('admin.tags.index',compact('tags'));
    }

    public function create(){
        return view('admin.tags.create');
    }

    public function store(Request $request){
        $all = $request->all();
        $create = Tag::create($all);
        if($create){
            return redirect()->back()->with("succsess", 'Tag əlavə edildi');
        }else{
            redirect()->back()->with("error",'tag əlavə edilmedi');
        }
    }

    public function edit(Request $request,$id){
        $tag = Tag::findOrFail($id);
        $all = $request->all();
        $update = $tag->update($all);
        if ($update) {
            return redirect()->back()->with('succsess', 'tag yenilendi');
        } else {
            return redirect()->back()->with('error', 'Xəta baş verdi tag yenilenmedi');
        }
    }

    public function delete($id){
        Tag::destroy($id);
        return redirect()->back()->with('succsess', 'tag silindi');
    }
}
