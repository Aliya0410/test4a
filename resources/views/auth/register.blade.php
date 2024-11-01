<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('registerOut') }}"method="POST">
        @csrf
        <div>
            <label for=name>Введите имя</label>
            <input type="name" name="name" id="name">
        </div>
        <div>
            <label for=email>Введите почту</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for=password>Введите пароль</label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">Зарегистрироваться</button>

    </form>
</body>

</html>
