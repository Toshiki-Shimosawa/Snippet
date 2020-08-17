@extends('layouts/app')

@section('content')
   
    <div class="card edit">
        <h5 class="card-header">新規登録フォーム</h5>
        <div class="card-body">
            <form action="confirm" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">タイトル</label><br>
                    <input type="text" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="description">内容</label><br>
                    <textarea name="description" id="description" cols="120" rows="15"></textarea>
                </div>
                <div class="form-group">
                    <label for="language">言語</label><br>
                    <select name="language" id="language">
                        <option value="htmlcss">HTML/CSS</option>
                        <option value="laravel">Laravel</option>
                        <option value="js">JavaScript</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">レコードタイプ</label><br>
                    <select name="type" id="type">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <input type="submit" value="登録する">
            </form>
　　　　　</div>
　　　</div>
@endsection