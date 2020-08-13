@extends('layouts/app')

@section('subTitle','TOP')

@section('content')
    <div>
        <div class="row">
            <div class="col-3 block1">
                <ul>
                    @foreach ($items as $item)
                        <li class="menuTag {{$item->language}}"><a href="#{{$item->id}}">[{{$item->language}}] {{$item->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-9 block2">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="option1" autocomplete="off"> HTML/CSS
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="option2" autocomplete="off"> Laravel
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="option3" autocomplete="off"> JavaScript
                    </label>
                </div>
                <a href="{{url('console')}}"><button class="btn btn-info">新規登録</button></a>
                <form action="snippets" method="POST" class="searchForm">
                    @csrf
                    <input type="search" name="search" placeholder="キーワードの入力" class="form-control">
                    <input type="submit" name="submit" value="検索" class="btn btn-info mb-2 searchForm">
                </form>
                
                @foreach($items as $item)
                    <div id="{{$item->id}}" class="box {{$item->language}}">
                        <dt>[{{$item->language}}] {{$item->title}}</dt>
                        <div class="snippetText">
                        
<dd><pre><code>
{{$item->description}}
</code></pre></dd>
                            
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#option1').on('click',()=>{
            $('.htmlcss').show();
            $('.menuTag:not(.htmlcss)').hide();
            $('.box:not(.htmlcss)').hide();
        });
        $('#option2').on('click',()=>{
            $('.laravel').show();
            $('.menuTag:not(.laravel)').hide();
            $('.box:not(.laravel)').hide();
        });
        $('#option3').on('click',()=>{
            $('.js').show();
            $('.menuTag:not(.js)').hide();
            $('.box:not(.js)').hide();
        });
    </script>
@endsection