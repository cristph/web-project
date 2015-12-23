<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href=" {{URL::asset('css/health/home.css')}} ">
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
        <div class="row">
            <div class="col-sm-3">
                <div class="row img_container">
                    <img class="my-img img-circle" src={{ URL::asset('../image/portrait/'.$id.'.jpg') }}>
                </div>
                <div class="text-container">
                    <label class="my-name">{{  $name}}</label>
                </div>
            </div>
            <div class="col-sm-7 div-left-border">
                <div class="row">
                    <h3 class="my-h3">您本周的运动状况</h3>
                </div>
                <div class="row week-info-container">
                    <div class="col-sm-3 week-info-steps">
                        <p class="instruction">平均运动步数</p>
                        <p>{{ $step }}</p>
                    </div>
                    <div class="col-sm-3 week-info-sleep">
                        <p class="instruction">平均睡眠时间</p>
                        <p>{{ $sleep_time }}</p>
                    </div>
                    <div class="col-sm-3 week-info-rank">
                        <p class="instruction">平均每天消耗</p>
                        <p>{{ $cal_avg }}大卡</p>
                    </div>
                </div>
                <div class="row">
                    <h3 class="my-h3">你加入以来的运动总量</h3>
                    <div class="row all-info">
                        <span class="img-container">
                            <img src="../image/foot.png" class="img-rounded small-img">
                        </span>
                        <span class="text-container">
                            <label class="my-info">累计运动距离{{ $distance }}公里</label>
                        </span>
                        <span class="img-container">
                            <img src="../image/clock.png" class="img-rounded small-img">
                        </span>
                        <span class="text-container">
                            <label class="my-info">累计运动{{ $gap }}天</label>
                        </span>
                        <span class="img-container">
                            <img src="../image/fire.png" class="img-rounded small-img">
                        </span>
                        <span class="text-container">
                            <label class="my-info">累计燃烧{{ $cal }}大卡</label>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <h3 class="my-h3">您的身体状况</h3>
                    <div class="body-info">
                        <div class="row">
                            <div class="col-sm-7"><p class="body-info">平均心率:{{ $heart_rate }}</p></div>
                            <div class="col-sm-4"><p class="body-info">正常指数：60~100</p></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7"><p class="body-info">平均收缩压:{{ $sbp }}</p></div>
                            <div class="col-sm-4"><p class="body-info">正常指数：90~140</p></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7"><p class="body-info">平均舒张压:{{ $dbp }}</p></div>
                            <div class="col-sm-4"><p class="body-info">正常指数：60~90</p></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>