@extends('layouts/app')
@section('subTitle','delete')

@section('content')
    <div class="card">
        <h5 class="card-header">下記を本当に削除しますか？</h5>
        <div class="card-body">
                <div class="form-group">
                    <label class="bg-warning font-weight-bold" for="title">タイトル</label><br>
                    {{$article->title}}
                </div>
                <div class="form-group">
                    <label class="bg-warning font-weight-bold" for="description">内容</label><br>
                    {{$article->description}}
                </div>
                <div class="form-group">
                    <label class="bg-warning font-weight-bold" for="language">言語</label><br>
                    {{$article->language}}
                </div>
                <div class="form-group">
                    <label class="bg-warning font-weight-bold" for="type">レコードタイプ</label><br>
                    {{$article->type}}
                </div>
          
　　　　　</div>
        <a href="{{route('remove')}}?id={{$article->id}}"><button>削除する</button></a>
　　　</div>
@endsection