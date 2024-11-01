<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="{{ route('register') }}"method="POST">Зарегистрироваться</a>
        <a href="{{ route('login') }}"method="POST">Войти</a>
    </nav>

    @foreach ($obiavlenias as $obiavlenia)
        {{ $obiavlenia->name}}
        {{ $obiavlenia->text}}
        {{ $obiavlenia->created_at}}
    @endforeach
</body>
</html>
