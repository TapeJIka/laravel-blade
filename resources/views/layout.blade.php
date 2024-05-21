<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header style="display: flex; justify-content: space-around; align-items: center; background-color: rebeccapurple; width: 100vw; height: 60px ">
    <a href="{{ route('about') }}" style="">click</a>
    <a href="{{ route('create-article') }}" style="border: 2px solid white; border-radius: 10px; padding: 2px; text-decoration: none; color: white; font-size: 20px">create article</a>
</header>
<section style="display: flex; flex-wrap: wrap; justify-content: center; width: 100vw; margin-top: 20px">
    @yield('content')
</section>
</body>
</html>
