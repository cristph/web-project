<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">
    <script src="{{ URL::asset('js/register.js') }}"></script>
    <title>注册</title>
</head>

<body>
    <div class="container">
        <form action="/auth/register" method="post" id="register" onsubmit="return Check()">
            {!! csrf_field() !!}
            <div id="login">
                    <select name="profession">
                        <option>Common User</option>
                        <option>Doctor</option>
                        <option>Coach</option>
                        <option>Admin</option>
                    </select>
                    <input id="username" name="name" required="required" type="text" value="{{ old('name') }}" placeholder="your username">
                    <input id="email" name="email" required="required" type="email" value="{{ old('email') }}" placeholder="your email">
                    <input id="password" name="password" required="required" type="password" placeholder="your
                    password" >
                    <input type="submit" value="Register">
                <p>
                    already a member ?
                    <button class="chang_link"><a href="/auth/login">login</a></button>
                    <label style="color:#ff0000">{{ isset($error) ? $error : "" }}</label>
                </p>
            </div>

        </form>
    </div>
</body>
</html>