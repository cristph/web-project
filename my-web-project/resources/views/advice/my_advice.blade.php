<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href=" {{URL::asset('css/advice/my_advice.css')}} ">
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
            <div class="col-sm-3">
                <div class="row image-container">
                    <img class="img-circle my-img" src={{ URL::asset('../image/portrait/'.$id.'.jpg') }}>
                </div>
                <div class="row name-container">
                    <label class="my-name"> {{ $name }} </label>
                </div>
            </div>
            <div class="col-sm-7 div_left_border">
                <div class="row my-form">
                    <h2>批量导入建议</h2>
                    <form method="post" action="/advice/importFile" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="advice">
                        <input type="submit" class="btn btn-info" value="导入">
                    </form>
                </div>
                <div class="row advice-container">
                    <h2>已发表的意见</h2>
                    @for($i=0;$i<sizeof($advice);$i++)
                        <div class="row my-advice">
                            <div class="row my-advice-content">
                                {{ ($i+1).'.  '.$advice[$i]['content'] }}
                            </div>
                            <div class="row advice-other-info">
                                <span class="glyphicon glyphicon-thumbs-up">{{ $advice[$i]['like'] }}</span>
                                <span class="glyphicon glyphicon-thumbs-down">{{ $advice[$i]['unlike'] }}</span>
                                <span class="">created_at:{{ $advice[$i]['created_at'] }}</span>
                                <span>
                                    <a href="/advice/delete/{{$advice[$i]['id']}}">
                                        <button class="btn btn-info">删除</button>
                                    </a>
                                </span>
                            </div>

                        </div>
                        <div class="blank10"></div>
                    @endfor
                </div>
            </div>
        </div>
    </body>
</html>