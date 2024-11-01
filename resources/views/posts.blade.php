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
        <a href="{{ route('logout') }}"method="POST">Выйти</a>
    </nav>

    <form action="{{ route('posts') }}"method="POST">
        @csrf
        <div>
            <label for=name>Введите название</label>
            <input type="name" name="name" id="name">
        </div>
        <div>
            <label for=text>Введите текст</label>
            <input type="text" name="text" id="text">
        </div>


        <button type="submit">Зарегистрироваться</button>

    </form>
</body>
</html>
