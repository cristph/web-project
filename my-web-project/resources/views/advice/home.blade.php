<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href=" {{URL::asset('css/advice/home.css')}} ">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
        <script src="{{URL::asset('https://ajax.googleapis.com/ajax/lib/jquery/1.11.3/jquery.min.js')}}"></script>
        <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <title>welcome</title>
    </head>

    <body background="{{ URL::asset('/image/bg.jpg') }}">
        <div class="home_header">
            <div class="web-menu">
                <ul>
                    <li class="li">
                        <a href="/user/home">首页</a>
                    </li>
                    <li class="li">
                        <a href="/health/home">健康管理</a>
                    </li>
                    <li class="li">
                        <a href="/activity/all">热门活动</a>
                    </li>
                    <li class="li">
                        <a href="/advice/home">运动建议</a>
                    </li>
                </ul>
            </div>
            <div class="home-user">
                <div class="home-user-content">
                    <div class="btn-group" role="group" aria-label="..">
                        <a href="/user/info">
                            <button type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-cog"></span>
                            </button>
                        </a>
                        <a href="/auth/logout">
                            <button type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-log-out"></span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 div_right_border">
                <div class="img_container">
                    <img class="my_img img-circle" src={{ URL::asset('../image/portrait/'.$id.'.jpg') }}>
                </div>
                <div class="blank10"></div>
                <div class="text_container">
                    <label>{{ $name }}</label>
                </div>
                @if(!$isCommonUser)
                    <div class="row my_btn">
                        <a href="/advice/my_advice">
                            <button class="btn btn-info btn-lg">发表的建议</button>
                        </a>
                    </div>
                @endif
            </div>
            <div class="col-sm-7">
                @if(!$isCommonUser)
                    <div class="row my_form">
                        <h2>发布建议</h2>
                        <form method="post" action="/advice/create" class="form-group">
                            {{ csrf_field() }}
                            <dl class="form-group">
                                <textarea name="advice" class="form-control advice"></textarea>
                            </dl>
                            <dl class="form-group my_btn">
                                <input type="submit" class="btn btn-info my_btn" value="发布">
                            </dl>
                        </form>
                    </div>
                @endif
                <div class="row">
                    <h2>专家建议</h2>
                </div>
                <div class="row">
                    @for($i=0;$i<sizeof($advice);$i++)
                        <div class="row">
                            <div class="row my_image">
                                <span class="user-image">
                                    <img class="img-circle my_img" src={{ URL::asset('../image/portrait/'.$advice[$i]['authorId'].'.jpg') }}>
                                </span>
                                <span class="user-name">
                                    <label class="user-name">{{ $advice[$i]['name'] }}</label>
                                </span>
                            </div>
                            <div class="row content-container">
                                <p>{{ $advice[$i]['content'] }}</p>
                            </div>
                            <div class="row other-info">
                                <a href={{ '/advice/like/'.$page.'/'.$advice[$i]['id'] }}>
                                    <span class="glyphicon glyphicon-thumbs-up">{{ $advice[$i]['like'] }}</span>
                                </a>
                                <a href={{ '/advice/unlike/'.$page.'/'.$advice[$i]['id'] }}>
                                    <span class="glyphicon glyphicon-thumbs-down">{{ $advice[$i]['unlike'] }}</span>
                                </a>
                                <span> created at:{{ $advice[$i]['created_at'] }}</span>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="row chevron">
                    <a href={{ '/advice/home/'. ((int)$page-1) }}>
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href={{ '/advice/home/'. ((int)$page+1) }}>
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <footer>
            <p>THANKS FOR VISITING</p>
        </footer>
    </body>
</html>