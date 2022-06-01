<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(){
        $articles=Article::all();
        return view('article.index',compact('articles'));
    }
    
    public function templateadd(){
        $category=Category::all();
        return view('article.create',compact('category'));
    }
    public function create(Request $request){
        $article=Article::create([
            'user_id'=>Auth()->user()->id,
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'content'=>$request->content,
            'image'=>$request->image
        ]);
        if ($request->hasfile('image')) {            
            $request->file('image')->move('gambar/'.$request->file('image')->getClientOriginalName()) ;
            $article->image = $request->file('image')->getClientOriginalName();
            $article->save();
        };
        return redirect('/articles');
    }
    public function edit($id){
        $article =Article::findorFail($id);
        return view('article.edit',compact('article'));
    }
    public function update($id ,Request $request){
        $article=Article::findOrfail($id)->update([
            'user_id'=>Auth()->user()->id,
            'title'=>$request->title,
            'content'=>$request->content,
            'image'=>$request->image
        ]);
        if ($request->hasfile('image')) {            
            $request->file('image')->move('article/'.$request->file('image')->getClientOriginalName()) ;
            $article->image=$request->file('image')->getClientOriginalName();
            $article->save();
        };
        return redirect('/articles');
    }
    public function delete($id){
        $article=Article::findOrfail($id)->delete();
        return back();
    }
}
