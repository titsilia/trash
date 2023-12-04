<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Опа, мусорок</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <x-header />

    <main class="center">
        <h1 class="reg__title">Регистрация</h1>
        <div class="auth__form_container ">
            <div class="auth__form">
                <div class="auth__form_text">Уже есть аккаунт?<a href="/auth">Войдите!</a></div>
                <div class="reg__inputs_border">
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Фамилия" type="text">
                    </div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Имя" type="text">
                    </div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Отчество" type="text">
                    </div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="+(700)202-22-92" type="text">
                    </div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="nazgulenok78@gmail.com" type="text">
                    </div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Пароль" type="text">
                    </div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Повторите пароль" type="text">
                    </div>
                </div>
                <button type="button" class="reg__buttons">Зайти</button>
            </div>
        </div>
    </main>

    <x-footer />
</body>

</html>
