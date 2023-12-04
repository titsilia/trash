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
        <h1 class="auth__title">Вход</h1>
        <div class="auth__form_container ">
            <div class="auth__form">
                <div class="auth__form_text">Еще нет аккаунта?<a href="/register">Зарегистрируйтесь!</a></div>
                <div class="auth__inputs_border">
                    <div class="auth__inputs_input"><input class="auth__inputs_input"placeholder="nazgulenok78@gmail.com" type="text"></div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Пароль"type="text">
                    </div>
                </div>
                <button type="button" class="auth__buttons">Зайти</button>
            </div>
        </div>
    </main>

    <x-footer/>
</body>

</html>
