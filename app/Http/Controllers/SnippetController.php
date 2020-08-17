<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Snippet;
use Illuminate\Support\Facades\Auth;

class SnippetController extends Controller
{
    function lists(){
        $items = Snippet::all();
        return view('lists',compact('items'));
    }

    function search(Request $request){
        $param = $request->input('search');
        $items = Snippet::where('description','LIKE',"%$param%")->get();
        return view('lists',compact('items'));
    }

    function confirm(Request $request){
        $params = $request;
        return view('check',compact('params'));
    }

    function commit(Request $request){
        $snippet = new Snippet();

        $snippet->create([
            'title' => $request->title,
            'description' => $request->description,
            'language' => $request->language,
            'type' => $request->type
        ]);
        
        return redirect('snippets')->with('createMessage','新規投稿を登録しました');
    }

    function delete(Request $request){
        if(Auth::check()){
            $article = Snippet::find($request->id);
            return view('delete',compact('article'));
        }else{
            return view('auth/login');
        }
        
    }

    function remove(Request $request){
        $article = Snippet::find($request->id)->delete();
        $items = Snippet::all();
        return view('lists',compact('items'));
    }

    function edit(Request $request){
        if(Auth::check()){
            $article = Snippet::find($request->id);
            return view('edit',compact('article'));
        }else{
            return view('auth/login');
        }
       
    }
    function editCommit(Request $request){
        $article = Snippet::find($request->id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->save();
        $items = Snippet::all();
        return view('lists',compact('items'));
    }
}

