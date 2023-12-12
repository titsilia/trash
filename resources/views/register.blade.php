<!DOCTYPE html>
<html lang="ru">

<x-index-head/>

<body>
    <x-header />

    <main class="center">
        <h1 class="reg__title">Регистрация</h1>
        <div class="auth__form_container ">
            <div class="auth__form">
                <div class="auth__form_text">Уже есть аккаунт?<a href="/auth">Войдите!</a></div>
                <form method="POST" action="/register_user">
                    @csrf
                    <div class="reg__inputs_border">
                        <div class="auth__inputs_inputs">
                            <input class="auth__inputs_input" placeholder="Фамилия" name="surname" type="text">
                            @error("surname")
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="auth__inputs_inputs">
                            <input class="auth__inputs_input" placeholder="Имя" name="name" type="text">
                            @error("email")
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Отчество" name="patronymic" type="text">
                            @error("patronymic")
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="+(700)202-22-92" name="telephone" type="tel">
                            @error("phone")
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="nazgulenok78@gmail.com" name="email" type="email">
                            @error("email")
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Пароль" name="password" type="password">
                            @error("password")
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Повторите пароль" name="repeat_password" type="password">
                            @error("confirm_password")
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button class="reg__buttons">Зарегистрироваться</button>
            </form>
            </div>
        </div>
    </main>

    <x-footer />
</body>

</html>
