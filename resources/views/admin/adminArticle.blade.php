<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Опа, мусорок</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <x-header-admin />
    <main class="center">
        <div class="article__title text-blue">Статьи</div>
        <div class="article-box">
            <div class="article-text">Добавить статью:</div>
            <div class="article-border">
                <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Название" type="text">
                </div>
                <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Добавить фото"
                        type="file">
                </div>
                <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Контент" type="text">
                </div>
                <button class="article-button text-black">Добавить</button>
            </div>
        </div>

        <div class="article-box">
            <div class="article-text">Редактировать статью:</div>
            <div class="article-content-box">
                <div class="article-border">
                    <div class="article-text-sub">
                        <p class="applications__text text-gray type">Название: </p>
                        <p class="applications__text text-black">15 фактов про мусор</p>
                    </div>
                    <div class="article-text-sub">
                        <p class="applications__text text-gray type">Контент:</p>
                        <p class="applications__text text-black">Все еще сомневаетесь зачем нужен раздельный сбор и
                            почему
                            надо...</p>
                    </div>
                    <div class="article-text-sub">
                        <p class="applications__text text-gray type">Редактировать:</p>
                    </div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Название"
                            type="text">
                    </div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder=""
                            type="file">
                    </div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Контент"
                            type="text">
                    </div>
                    <button class="article-button text-black">Сохранить изменения</button>
                    <button class="article-button text-black">Удалить</button>
                </div>

                <div class="article-border">
                    <div class="article-text-sub">
                        <p class="applications__text text-gray type">Название: </p>
                        <p class="applications__text text-black">Топ 10 сильнейших трансформеров</p>
                    </div>
                    <div class="article-text-sub">
                        <p class="applications__text text-gray type">Контент:</p>
                        <p class="applications__text text-black">10 МЕСТО) ШОКВЕЙВ</p>
                    </div>
                    <div class="article-text-sub">
                        <p class="applications__text text-gray type">Редактировать:</p>
                    </div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Название"
                            type="text">
                    </div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder=""
                            type="file">
                    </div>
                    <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Контент"
                            type="text">
                    </div>
                    <button class="article-button text-black">Сохранить изменения</button>
                    <button class="article-button text-black">Удалить</button>
                </div>
            </div>
        </div>
        <div class="articles__numbers">
            <p>1</p>
            <p>2</p>
            <p>3</p>
        </div>
        </div>



    </main>
    <x-footer />
</body>

</html>