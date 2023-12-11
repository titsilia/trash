<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>
    <x-header-auth />
    <main class="center">
        <div class="article__title text-red article__title_heading">Подборка статей</div>
        <div class="article__title text-black">Интересное про мусор</div>
        <div class="articles__content">
            <a href="/article">
                <div class="articles__content_container">
                    <div class="articles__content_box">
                        <div class="articles__content_heading">15 фактов о мусоре</div>
                        <div class="articles__content_text">Все еще сомневаетесь зачем нужен раздельный сбор и почему надо
                            снижать объемы образования отходов? Попробуем сейчас вас переубедить....</div>
                            <div class="articles__content_img"><img class="articles__image" src="../images/articles-1.jpg" alt=""></div>
                    </div>
                </a>

                <a href="/article">
                    <div class="articles__content_box">
                        <div class="articles__content_heading">Топ 10 сильнейших трансформеров</div>
                        <div class="articles__content_text">10 местов: Шоквейв</div>
                            <div class="articles__content_img"><img class="articles__image" src="../images/articles-1.jpg" alt=""></div>
                    </div>
                </a>
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
