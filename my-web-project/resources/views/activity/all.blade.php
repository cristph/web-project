<!--用户主页-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/activity/all.css')}}">
    <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
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

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="userHeader" style="text-align: center">
                <div class="userHeaderImg">
                    <a href=""><img class="user-image" src={{URL::asset('image/portrait/'. $portrait.'.jpg')}}></a>
                </div>
                <div class="userHeaderName">
                    <a href=""><p class="user-name">{{ isset($name)? $name:'无名' }}</p></a>
                </div>
                <div>
                    <div class="btn btn-group-vertical">
                        <a href="/activity/create"><button class="btn btn-info btn-lg">发起活动</button></a>
                        <a href="/activity/my_activity"><button class="btn btn-info btn-lg">我的活动</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <h3>活动区</h3>
            <div class="seperate"></div>
            <div class="blank10"></div>
            <div class="blank10"></div>
            @for($i=0; $i<sizeof($activity); $i++)
                <div class="row all">
                    <div class="col-sm-3">
                        <div class="row title">
                            <label >主题：{{ $activity[$i]['title'] }}</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row instruction">
                            <div class="col-sm-3">
                                <label>类型</label>
                            </div>
                            <div class="col-sm-6">{{ $activity[$i]['type'] }}</div>
                        </div>
                        <div class="row instruction">
                            <div class="col-sm-3">
                                <label>内容</label>
                            </div>
                            <div class="col-sm-6">{{ $activity[$i]['content']}}</div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="row detail">
                            <a href={{ '/activity/info/'.$activity[$i]['id'] }}>
                                <button class="btn btn-info ">详细信息</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blank10"></div>
            @endfor
        </div>
    </div>
    <div class="row" style="float:  right">
        <a href={{ '/activity/all/'. ((int)$current_page - 1) }}><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a href={{ '/activity/all/'. ((int)$current_page + 1) }}><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>


<footer><p>THANKS FOR VISITING</p></footer>
</body>
</html>