<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/user/upload_portrait.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ URL::asset('https://ajax.googleapis.com/ajax/lib/jquery/1.11.3/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <title></title>
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
    <div class="row" style="height: 20px"></div>
    <div class="row">
        <div class="col-sm-4" style="text-align: center;">
            <div class="header-info" style="font-weight: bold">
                <h3>个人设置</h3>
            </div>
            <div class="btn-group-vertical">
                <a href="/user/info">
                    <button type="button" class="btn btn-primary-outline btn-lg">
                        <span class="glyphicon glyphicon-erase"></span>
                        基本信息
                    </button>
                </a>
                <a href="/user/upload_portrait">
                    <button type="button" class="btn btn-primary-outline btn-lg">
                        <span class="glyphicon glyphicon-user"></span>
                        设置头像
                    </button>
                </a>
                <a href="">
                    <button type="button" class="btn btn-primary-outline btn-lg">
                        <span class="glyphicon glyphicon-heart"></span>
                        我的配件
                    </button>
                </a>
                <a href="/password/reset/{token}">
                    <button type="button" class="btn btn-primary-outline btn-lg">
                        <span class="glyphicon glyphicon-lock"></span>
                        账号安全
                    </button>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div>
                <div style="height: 20px"></div>
                <div style="text-align: center"><img src={{ '../image/portrait/' . $userPortrait . '.jpg' }}></div>
                <div style="height: 20px"></div>
                <div>
                    <form action="" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div style="vertical-align: middle">
                            <input type="file" name="portrait">
                        </div>
                        <div style="height: 10px"></div>
                        <div style="text-align: center">
                            <p>注意：头像图片只支持jpeg,jpg,png,gif,bmp格式;头像文件须小于5M</p>
                        </div>
                        <div style="height: 20px"></div>
                        <div style="text-align: center">
                            <input type="submit" class="btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer><p>THANKS FOR VISITING</p></footer>
</body>
</html>