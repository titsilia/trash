<!DOCTYPE html>
<html lang="ru">

<x-index-head/>

<body>
    <x-header />
    <main class="center">
        <div class="article__title">{{$article->articles_title}}</div>
        <a href="/articles" class="article__link"> < назад </a>
        <div class="article__content">
            <div class="article__content_text text-black">
            {{$article->articles_text}}
            </div>
            <div class="article__content_img">
                <img src="{{$article->articles_photo}}" alt="">
            </div>
        </div>
    </main>
    <x-footer/>
</body>

</html>
