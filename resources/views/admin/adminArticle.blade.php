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
                <form method="POST" action="/articles_create" enctype="multipart/form-data">
                    @csrf
                    <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Название" name="articles_title" type="text"></div>
                    <div class="auth__inputs_inputs">
                            <label for="image" class="auth__inputs_input">Изображение статьи</label>
                            <input class="auth__inputs_input" type="file" id="photo" name="articles_photo">
                    </div>
                    <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Контент" name="articles_text" type="text"></div>
                    <button class="article-button text-black">Добавить</button>
                </form>
            </div>
        </div>

        <div class="article-box">
            <div class="article-text">Редактировать статью:</div>
            <div class="article-content-box">
            @foreach ($articles as $item)
                <div class="article-border">
                    <div class="article-text-sub">
                        <p class="applications__text text-gray type">Название: </p>
                        <p class="applications__text text-black">{{$item->articles_title}}</p>
                    </div>
                    <div class="article-text-sub">
                        <p class="applications__text text-gray type">Контент:</p>
                        <p class="applications__text text-black">{{ $text = substr($item->articles_text, 0, 250) }}</p>
                    </div>
                    <div class="article-text-sub">
                        <p class="applications__text text-gray type">Редактировать:</p>
                    </div>
                    <form method="POST" action="/articles_update/{{$item->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="auth__inputs_inputs"><input class="auth__inputs_input" value="{{$item->articles_title}}" name="articles_title" placeholder="Название"
                                type="text">
                        </div>
                        <div class="auth__inputs_inputs"><input class="auth__inputs_input" value="{{$item->articles_text}}" name="articles_text" placeholder="Контент"
                                type="text">
                        </div>
                        <button class="article-button text-black">Сохранить изменения</button>
                        </form>
                            <a href="/articles_delete/{{$item->id}}" class="btn-block article-button text-black">Удалить</a>
                        

                </div>
            @endforeach
               
            </div>
        </div>
        <div class="articles__numbers">
        {{ $articles->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
        </div>



    </main>
    <x-footer />
</body>

</html>
