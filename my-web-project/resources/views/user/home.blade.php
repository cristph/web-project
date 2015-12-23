<!--用户主页-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href=" {{URL::asset('css/user/home.css')}} ">
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
                    <a href="/activity/all">活动管理</a>
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

    <div class="content">
        <div class="col-sm-3">
            <div class="userHeader">
                <div class="userHeaderImg">
                    <a href="/user/info">
                        <img class="img-circle user-image" src="{{URL::asset('image/portrait/'.$userPortrait.'.jpg')}}">
                    </a>
                </div>
                <div class="userHeaderName">
                    <a href="/user/info"><p class="user-name">{{ isset($userName) ? $userName : '----' }}</p></a>
                </div>
            </div>
        </div>
        <div class="col-sm-7 div_left_border">
            <h2 class="my-h2">过去一天运动量</h2>
            <div class="row today-info">
                <div class="col-sm-3 sports-info-day1">
                    <p class="my-text">已经走了</p>
                    <p>{{ $step }}步</p>
                </div>
                <div class="col-sm-3 sports-info-day2">
                    <p class="my-text">睡眠时间</p>
                    <p>{{ $sleep_time }}小时</p>
                </div>
                <div class="col-sm-3 sports-info-day3">
                    <p class="my-text">运动量超过</p>
                    <p>{{ $count }}%小伙伴</p>
                </div>
            </div>
            <h2 class="my-h2">发布心情</h2>
            <div class="row my_form">
                <form method="post" action="/user/createMood" class="form-group">
                    {{ csrf_field() }}
                    <dl class="form-group">
                        <textarea name="mood" class="form-control mood"></textarea>
                    </dl>
                    <dl class="form-group my_btn">
                        <input type="submit" class="btn btn-info my_btn" value="发布">
                    </dl>
                </form>
            </div>
            <div class="row">
                <h2 class="my-h2">心情圈</h2>
                <div class="row mood_container">
                    @for($i=0;$i<sizeof($moods);$i++)
                        <div class="row user-img">
                            <span>
                                <img class="img-circle my_img" src={{ URL::asset('../image/portrait/'.$moods[$i]['authorId'].'.jpg') }}>
                            </span>
                            <span><label class="my_name">{{ $moods[$i]['name'] }}</label></span>
                        </div>
                        <div class="row user-mood">
                            <p class="user-mood-container">{{ $moods[$i]['content'] }}</p>
                        </div>
                        <div class="row create-time">
                            <P class="time-container">{{ $moods[$i]['created_at'] }}</P>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</body>
</html>