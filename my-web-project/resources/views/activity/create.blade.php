<!--用户主页-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/activity/create.css')}}">
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
                <a href=""><img class="user-image" src={{URL::asset('image/portrait/'. $portrait.'.jpg')}}></a>
            </div>
            <div class="userHeaderName">
                <a href=""><p class="user-name">{{ isset($name)?$name:'无名' }}</p></a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="sports-today">
            <div class="row">
                <h2>发起活动</h2>
            </div>
            <div style="border-bottom: 1px solid #cccccc"></div>
            <div class="blank20"></div>
            <div class="form-group">
                <form class="form-horizontal" action="" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <label class="control-label">标题</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="blank20"></div>
                    <div class="row">
                        <label class="control-label">类型</label>
                        <select class="btn btn-default" id="type" name="type">
                            <option>跑步</option>
                            <option>健身</option>
                            <option>球类</option>
                            <option>其他</option>
                        </select>
                    </div>
                    <div class="blank20"></div>
                    <div class="form-group">
                        <label class="control-label">竞赛介绍</label>
                        <textarea class="form-control"  style="height: 100px;" name="content"></textarea>
                    </div>
                    <div class="blank20"></div>
                    <div class="row">
                        <label>时间</label>
                        <input type="date" class="btn btn-default" name="start_time">
                        <label> 至 </label>
                        <input type="date" class="btn btn-default" name="end_time">
                    </div>
                    <div class="blank20"></div>
                    <div class="row" style="text-align: center">
                        <input type="submit" class="btn btn-info">
                        <button class="btn-cancel" onclick="">取消</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div style="height: 20px"></div>
<footer><p>THANKS FOR VISITING</p></footer>
</body>
</html>