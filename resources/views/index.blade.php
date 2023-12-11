<!DOCTYPE html>
<html lang="en">

<x-index-head/>

<body>
    <x-header />
    <main>
        <div class="index__heading center">
            <div class="big-title">Вывоз <span class="text-orange">мусора</span> на дому для <span class="text-red">хикканов</span></div>
            <div class="index__moto">
                <div class="subtitle-low">Наша основная цель - предоставить простое и удобное решение для тех, кто хочет утилизировать свой мусор, не выходя из дома.</div>
                <div class="index__about">
                    <div class="index__about_left">Мы заботимся о вашем комфорте и окружающей среде</div>
                    <div class="">
                        <a href="/order"><img class="button1" src="../images/button1.png" alt=""></a>
                    </div>
                    <div class="footer__content_links">
                        <a href="/articles" class="footer__content_link"><img class="footer__content_img" src="../images/footerbutton1.png" alt=""></a>
                    </div>
                    <div class="index__about_right">Мы также осуществляем сортировку и утилизацию мусора в соответствии с экологическими стандартами.
                    </div>

                </div>
                <div class="index__about_info">
                    <div><img src="../images/heading1.png" alt=""></div>
                    <div><img src="../images/heading2.png" alt=""></div>
                    <div><img src="../images/heading3.png" alt=""></div>
                </div>
            </div>
        </div>

        <div class="index__help center ">
            <div class="title">В чем ваша выгода?</div>
            <div class="index__help_box">
                <div class="index__help_left">
                    <div class="subtitle">Наш сервис реально помогает!</div>
                    <div class="subtitle-low index__help_sub">Заказчики освобождаются от нелюбимого дела, а исполнители получают возможность на этом заработать.</div>
                    <img src="../images/help.jpg" alt="">
                </div>
                <div class="index__help_right">
                    <img src="../images/help2.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="index__review center">
            <div class="review__title center">Отзывы</div>
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><img src="../images/slider1.jpg" alt=""></li>
                        <li class="splide__slide"><img src="../images/slider2.jpg" alt=""></li>
                        <li class="splide__slide"><img src="../images/slider1.jpg" alt=""></li>
                        <li class="splide__slide"><img src="../images/slider2.jpg" alt=""></li>
                        <li class="splide__slide"><img src="../images/slider1.jpg" alt=""></li>
                    </ul>
                </div>
            </section>
        </div>

        <div class="index__article center">
        <div class="article__title text-black">Интересное про мусор</div>
        <div class="articles__content">
            <div class="articles__content_container">
                <a href="/article">
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
    </div>











    </main>
    <x-footer />
    <script>
        var splide = new Splide('.splide', {
            type: 'slide',
            padding: { right: 30 },
            perPage: 2,
            arrows: false,
            pagination: false,
            gap: "30px",
        });

        splide.mount();
    </script>
</body>

</html>
