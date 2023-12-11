<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>
    <x-header />

    <main class="center">
        <h1 class="reg__title">Регистрация</h1>
        <div class="auth__form_container ">
            <div class="auth__form">
                <form method="POST" action="">
                    <div class="auth__form_text">Уже есть аккаунт?<a href="/auth">Войдите!</a></div>
                    <div class="reg__inputs_border">
                        <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Фамилия" name="surname" type="text">
                        </div>
                        <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Имя" name="name" type="text">
                        </div>
                        <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Отчество" name="patronymic" type="text">
                        </div>
                        <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="+(700)202-22-92" name="phone" type="tel">
                        </div>
                        <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="nazgulenok78@gmail.com" name="email" type="email">
                        </div>
                        <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Пароль" name="password" type="password">
                        </div>
                        <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Повторите пароль" name="repeat_password" type="password">
                        </div>
                    </div>
                    <button type="submit" class="reg__buttons">Зайти</button>
            </form>
            </div>
        </div>
    </main>

    <x-footer />
</body>

</html>
