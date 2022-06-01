<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(){
        $categories=Category::all();
        return view('category.index',compact('categories'));
    }
    
    public function templateadd(){
       
        return view('category.create');
    }
    public function create(Request $request){
        $category=Category::create([
            'user_id'=>Auth()->user()->id,
            'name'=>$request->name
        ]);
        return redirect('/categories');
    }
    public function edit($id){
        $category =Category::findorFail($id);
        return view('category.edit',compact('category'));
    }
    public function update($id ,Request $request){
        $category=Category::findOrfail($id)->update([
            'user_id'=>Auth()->user()->id,
            'name'=>$request->name
        ]);
        return redirect('/categories');
    }
    public function delete($id){
        $category=Category::findOrfail($id)->delete();
        return back();
    }
}
