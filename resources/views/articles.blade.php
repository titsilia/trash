<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>
    <x-header-auth />
    <main class="center">
        <div class="article__title text-red article__title_heading">Подборка статей</div>
        <div class="article__title text-black">Интересное про мусор</div>
        <div class="articles__content">
            <div class="articles__content_container">
            @foreach($articles as $item)
                <a href="/article">
                    <div class="articles__content_container">
                        <div class="articles__content_box">
                            <div class="articles__content_heading">{{$item->articles_title}}</div>
                            <div class="articles__content_text">{{$text = substr($item->articles_text, 0, 250)}}</div>
                            <div class="articles__content_img"><img class="articles__image" src="../images/articles-1.jpg" alt=""></div>
                        </div>
                    </div>
                </a>
            @endforeach
            </div>
            <div class="articles__numbers">
                {{ $articles->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </div>



    </main>
    <x-footer />
</body>

</html>
