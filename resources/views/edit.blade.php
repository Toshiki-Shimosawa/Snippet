@extends('layouts/app')

@section('content')
   
    <div class="card">
        <h5 class="card-header">編集フォーム</h5>
        <div class="card-body">
            <form action="edit" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$article->id}}">
                <div class="form-group">
                    <label for="title">タイトル</label><br>
                    <input type="text" name="title" id="title" value="{{$article->title}}">
                </div>
                <div class="form-group">
                    <label for="description">内容</label><br>
                    <textarea name="description" id="description" cols="120" rows="15">{{$article->description}}</textarea>
                </div>
                <input type="submit" value="変更する">
            </form>
　　　　　</div>
　　　</div>
@endsection