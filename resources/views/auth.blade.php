<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Опа, мусорок</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <x-header/>

    <main class="center">
        @if (session("error"))
            {{session("error")}}
        @endif
        <h1 class="auth__title">Вход</h1>
        <div class="auth__form_container ">
            <form method="POST" action="/auth_user" class="auth__form">
                @csrf
                <div class="auth__form_text">Еще нет аккаунта?<a href="/register">Зарегистрируйтесь!</a></div>
                <div class="auth__inputs_border">
                    <div class="auth__inputs_input">
                        <input class="auth__inputs_input"placeholder="nazgulenok78@gmail.com" type="text" name="email">
                        @error("email")
                            <div class="alert alert-damger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="auth__inputs_input">
                        <input class="auth__inputs_input" placeholder="Пароль"type="text" name="password">
                        @error("password")
                            <div class="alert alert-damger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="auth__buttons">Зайти</button>
            </form>
        </div>
    </main>

    <x-footer/>
</body>

</html>
