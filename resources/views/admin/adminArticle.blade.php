<!DOCTYPE html>
<html lang="en">

<x-index-head/>

<body>
    <x-header />
    <main class="center">
        <div class="article__title text-blue">Статьи</div>
        <div class="article-box">
            <div class="article-text">Добавить статью:</div>
            <div class="article-border">
                <form method="POST" action="">
                    <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Название" name="title" type="text"></div>
                    <div class="auth__inputs_inputs">
                            <label for="image" class="auth__inputs_input">Изображение статьи</label>
                            <input class="auth__inputs_input" type="file" id="photo" name="photo">
                    </div>
                    <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Контент" name="content" type="text"></div>
                    <button class="article-button text-black">Добавить</button>
                </form>
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
                    <form method="POST" action="">
                        <div class="auth__inputs_inputs"><input class="auth__inputs_input" value="" name="title" placeholder="Название"
                                type="text">
                        </div>
                        <div class="auth__inputs_inputs">
                            <label for="image" class="auth__inputs_input">Изображение статьи</label>
                            <input class="auth__inputs_input" value="" name="photo" placeholder="" type="file">
                        </div>
                        <div class="auth__inputs_inputs"><input class="auth__inputs_input" value="" name="content" placeholder="Контент"
                                type="text">
                        </div>
                        <button class="article-button text-black">Сохранить изменения</button>
                        <a class="btn-block article-button text-black" href="">Удалить</a>
                    </form>
                </div>

                {{-- <div class="article-border">
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
                    <form action="">
                        <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Название"
                                type="text" name="title">
                        </div>
                        <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder=""
                                type="file" name="photo">
                        </div>
                        <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Контент"
                                type="text" name="content">
                        </div>
                        <button class="article-button text-black" type="submit">Сохранить изменения</button>
                        <button class="article-button text-black" type="submit">Удалить</button>
                    </form>
                </div> --}}
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
