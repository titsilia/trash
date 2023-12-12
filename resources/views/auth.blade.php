<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>
    <x-header/>

    <main class="center">
        @if (session("error"))
            {{session("error")}}
        @endif
        <h1 class="auth__title">Вход</h1>
        <div class="auth__form_container ">
        <div class="auth__form_text">Еще нет аккаунта?<a href="/register">Зарегистрируйтесь!</a></div>
            <form method="POST" action="/auth_user" class="auth__form">
                @csrf
                <div class="auth__inputs_border">
                    <div class="auth__inputs_inputs">
                        <input class="auth__inputs_input" placeholder="nazgulenok78@gmail.com" type="email" name="email">
                        @error("email")
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="auth__inputs_inputs">
                        <input class="auth__inputs_input" placeholder="Пароль" type="password" name="password">
                        @error("password")
                            <div class="alert alert-danger" role="alert">
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
