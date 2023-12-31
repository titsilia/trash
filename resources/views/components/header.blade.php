
<div>
    <header class="header center">
        <nav class="header__nav">
            <div class="header__nav__links-container">
                <div class="header__nav__links">
                    <div class="header__nav_link"><a href="/order">Заказать услугу на дом</a></div>
                    <div class="header__nav_link"><a href="/articles">Интересное про мусор</a></div>
                </div>
                <div class="header__nav_img"><a href="/"><img src="../images/logo.png" alt=""></a></div>
            </div>
            <div class="header__nav__auth ">
                @guest
                    <div class="header__nav_link"><a href="/auth">Вход</a></div>
                    <div class="header__nav_link"><a href="/register">Регистрация</a></div>
                @endguest
                @auth
                    <?php if(auth()->user()->role_id === 1) { ?>
                        <div class="header__nav_link"><a href="../admin_applications">Заявки</a></div>
                        <div class="header__nav_link"><a href="../admin_articles">Статьи</a></div>
                        <div class="header__nav_link"><a href="/lk">Личный кабинет</a></div>
                        <div class="header__nav_link"><a href="/exit">Выход</a></div>
                    <?php } else { ?>
                        <div class="header__nav_link"><a href="/lk">Личный кабинет</a></div>
                        <div class="header__nav_link"><a href="/exit">Выход</a></div>
                    <?php } ?>

                @endauth
            </div>
        </nav>
    </header>
</div>
