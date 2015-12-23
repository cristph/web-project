<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/activity/info.css') }}">
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
</div>

<div class="container">
    <div class="col-sm-4">
        <div class="userHeader" style="text-align: center">
            <div class="userHeaderImg">
                <a href=""><img class="user-image" src="{{URL::asset('image/portrait/'. $accountId.'.jpg')}}"></a>
            </div>
            <div class="userHeaderName">
                <a href=""><p class="user-name">{{ isset($accountName)?$accountName:'无名' }}</p></a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="row">
            <h2>活动发起人：{{ $author }}</h2>
        </div>
        <div class="row">
            <h2>活动信息</h2>
        </div>
        <div style="border-bottom: 1px solid #cccccc"></div>
        <div class="blank20"></div>
        <div class="row">
            <div class="activity-info">
                <div class="title">
                    <p style="font-size: 20px">
                        <span class="glyphicon glyphicon-flag" style="font-size: 50px"></span>
                        <span class="info">{{ $title }}</span>
                    </p>
                </div>
                <div style="height: 10px"></div>
                <div class="time">
                    <p style="font-size: 20px">
                        <span class="glyphicon glyphicon-time" style="font-size: 50px"></span>
                        <span class="info">{{  $start_time. '---'. $end_time }}</span>
                    </p>
                </div>
                <div style="height: 10px"></div>
                <div class="con">
                    <p style="font-size: 20px">
                        <span class="glyphicon glyphicon-list-alt" style="font-size: 50px"></span>
                        <span class="info">{{ $content }}</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="blank20"></div>
        <div class="row">
            <form method="post" action="">
                {{ csrf_field() }}
                <div style="text-align: right">
                    <button class="btn btn-info btn-lg">我要加入</button>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="row">
                <h2>共{{ $count }}人参加</h2>
            </div>
            <div class="seperator"></div>
            <div class="blank10"></div>
            @for($i=0;$i<sizeof($participator);$i++)
                <div class="row">
                    <span>
                        <img class="participator-img" src="{{URL::asset('image/portrait/'. $participator[$i]['user_id'].'.jpg')}}">
                    </span>
                    <span class="participator-name">{{ $participator[$i]['name'] }}</span>
                </div>
                <div class="blank5"></div>
            @endfor
        </div>
    </div>
</div>

<footer><p>THANKS FOR VISITING</p></footer>
</body>
</html>