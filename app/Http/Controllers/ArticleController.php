<?php

namespace App\Http\Controllers;
use App\Models\Article;

class ArticleController extends Controller
{
    
    public function article(){

        $articles=Article::all();

        return view('article',compact('articles'));
    }

    public function softDelete($id){

        Article::find($id)->delete();

        return back();

    }

    public function trashed(){

        $articles = Article::onlyTrashed()->get();
        
        return view('trashed',compact('articles'));

    }

    public function restore($id){

        Article::whereId($id)->restore();
        
        return back();

    }

    public function restoreAll(){

        Article::onlyTrashed()->restore();

        return back();
    }

    public function forceDelete($id){

        Article::find($id)->forceDelete();

        return back();
    }

}
