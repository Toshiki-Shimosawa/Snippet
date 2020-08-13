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
        
        return view('home');
    }
}
