<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <form action='/contato' method='post'>
            {{ csrf_field() }}
            Nome: <input type='text' name='nome' value=''> <br>
            Celular: <input type='text' name='cel' value=''> <br>
            <input type='submit' value='Enviar'>
        </form>
    </body>
</html>
