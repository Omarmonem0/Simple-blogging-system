<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;

class mange extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function AddArticle(Request $request){
        if ($request->isMethod('post')) {

           $arr=new Article();
           $arr->title=$request->input('title');
           $arr->body=$request->input('body');
            $arr->user_id=Auth::user()->id;
            $arr->save();
            return redirect('view');

        }
        return view('mange.addarticle');

    }
    public function view(){
        $articles=Article::all();

        return view('mange.view',compact('articles'));
    }
    public function read(Request $request,$id){
        if ($request->isMethod('post')) {

            $comm=new Comment();
            $comm->body=$request->input('body');
            $comm->article_id=$id;
            $comm->save();


        }

            $articles=Article::find($id);
            return view('mange.read',compact('articles'));

    }
}
