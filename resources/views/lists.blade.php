<div class="changeAlert">
</div>
@extends('layouts/app')

@section('subTitle','TOP')

@section('content')
    <div>
        <div class="row listsRow">

            <div class="col-3 block1">

                    @foreach ($items as $item)
                    <a href="#{{$item->id}}"><p class="menuTag {{$item->language}}">&nbsp;&nbsp;&nbsp;&nbsp;#[{{$item->language}}] {{$item->title}}</p></a>
                    @endforeach
                    <hr>

                <div class="sideLink">
                    <a href="https://github.com/Toshiki-Shimosawa?tab=repositories" target="_blank" rel="noopener noreferrer"><img src="{{asset('img/gitlogo.png')}}" alt="githublogo" class="linkLogo"></a>
                </div>
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
                        <div class="btn-group-sm editDelete" role="group" aria-label="edit delete">
                            <button type="button" class="btn btn-info"><a href="{{route('edit')}}?id={{$item->id}}" class="operation">編集</a></button>
                            <button type="button" class="btn btn-danger"><a href="{{route('delete')}}?id={{$item->id}}" class="operation">削除</a></button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <a href="#">
    <div class="toUpper">
        <i class="fas fa-angle-up"></i>
        <p>TOPへ</p>
    </div>
    </a>
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
    <script>
        $(function(){

            function animation(){
                $('.toUpper').each(function(){
                    var windowHeight = $(window).height();
                    var scroll = $(window).scrollTop();
                        if(scroll>windowHeight){
                            $(this).css("opacity","0.8");
                            $(this).css("transition","0.7s");
                            $(this).css('transform','translateY(-50px)');
                        }else{
                            $(this).css("opacity","0");
                            $(this).css("transform","translateY(100px)");
                        }
                });
            }
            animation();
            $(window).scroll(function(){
                animation();
            });
        });
    </script>
    <script>
        $(function(){
            $('.changeAlert').hide();
            @if(session('createMessage'))
                $('.changeAlert').text('{{session('createMessage')}}').show();

                setTimeout(() => {
                    $('.changeAlert').hide();
                }, 3000)
            @endif
        });

    </script>
@endsection
