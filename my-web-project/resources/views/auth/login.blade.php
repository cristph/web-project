<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">
    <script src="{{ URL::asset('js/login.js')}}"></script>
    <title>登陆</title>
</head>
<body><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆</title>
</head>

<body>
<div class="container">
    <form action="/auth/login" method="post" id="login">
        {!! csrf_field() !!}
        <div id="login_demo">
                <input id="email" name="email" required="required" type="email" value="{{ old('email') }}"
                       placeholder="your email">
                <input id="password" name="password" required="required" type="password" placeholder="your password">
                <input type="submit" value="Login">
            <p>
                not a member yet ?
                <button class="change_link"><a href="/auth/register">register</a></button>
            </p>
            <label id="error-log" style="color: red">{{ isset($error) ? $error : "" }}</label>
        </div>
    </form>
</div>
</body>
</html>

</body>
</html>