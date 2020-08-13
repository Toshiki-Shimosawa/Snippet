@extends('layouts/app')

@section('content')
    <div class="card">
        <h5 class="card-header">下記の内容で新規登録しますか？</h5>
        <div class="card-body">
                <div class="form-group">
                    <label class="bg-warning font-weight-bold" for="title">タイトル</label><br>
                    {{$params->title}}
                </div>
                <div class="form-group">
                    <label class="bg-warning font-weight-bold" for="description">内容</label><br>
                    {{$params->description}}
                </div>
                <div class="form-group">
                    <label class="bg-warning font-weight-bold" for="language">言語</label><br>
                    {{$params->language}}
                </div>
                <div class="form-group">
                    <label class="bg-warning font-weight-bold" for="type">レコードタイプ</label><br>
                    {{$params->type}}
                </div>
          
　　　　　</div>
        <form action="commit" method="POST">
            @csrf
            <input type="hidden" name="title" value="{{$params->title}}">
            <input type="hidden" name="description" value="{{$params->description}}">
            <input type="hidden" name="language" value="{{$params->language}}">
            <input type="hidden" name="type" value="{{$params->type}}">
            <input type="submit" value="登録する">
        </form>
　　　</div>
@endsection