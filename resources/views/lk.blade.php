<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>
    <x-header-auth />
    <main class="center">
        <div class="article__title text-blue">Личный кабинет</div>
        <div class="lk-box">
            <div class="article-border">
                <div class="article-text-sub">
                    <p class="applications__text text-gray type">ФИО: </p>
                    <p class="applications__text text-black">Ноунеймов Ноунейм Ноунеймович</p>
                </div>
                <div class="article-text-sub">
                    <p class="applications__text text-gray type">Номер телефона:</p>
                    <p class="applications__text text-black">+(789)233-23-33</p>
                </div>
                <div class="article-text-sub">
                    <p class="applications__text text-gray type">Почта:</p>
                    <p class="applications__text text-black">noname@gmail.com</p>
                </div>
                <div class="article-text-sub">
                    <p class="applications__text text-gray type">Редактировать:</p>
                </div>
                <form method="POST" action="">
                <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Фамилия" name="surname" type="text"></div>
                <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Имя" name="name" type="text"></div>
                <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Отчество" name="patronymic" type="text"></div>
                <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="+(700)202-22-92" name="phone" type="tel"></div>
                <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="nazgulenok78@gmail.com" name="email" type="email"></div>
                <button class="article-button text-black" type="submit">Сохранить изменения</button>
            </form>
            </div>

            <div class="lk-box-side">
                <div class="article-box">
                    <div class="article-border">
                        <div class="article-text-sub">
                            <p class="applications__text text-gray type">Адрес</p>
                            <p class="applications__text text-black">Ул. Архитектора Калимуллина, д 4, п 1, кв 76</p>
                        </div>
                        <div class="article-text-sub">
                            <p class="applications__text text-gray type">Редактировать:</p>
                        </div>
                        <form method="POST" action="">
                        <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Улица" name="street" type="text"></div>
                        <div class="article-inputs-short">
                            <div class="auth__inputs_input short"><input class="auth__inputs_input short"placeholder="Дом" name="home" type="text"></div>
                            <div class="auth__inputs_input short"><input class="auth__inputs_input short"placeholder="Подъезд" name="entrance" type="text"></div>
                            <div class="auth__inputs_input short"><input class="auth__inputs_input short"placeholder="Этаж" name="floor" type="text"></div>
                            <div class="auth__inputs_input short"><input class="auth__inputs_input short"placeholder="Кв" name="apartment" type="text"></div>
                        </div>
                        <button class="article-button text-black" type="submit">Сохранить изменения</button>
                    </form>
                    </div>

                    <div class="lk-box">
                        <div class="article-border">
                            <div class="article-text-sub">
                                <p class="applications__text text-gray type">Адрес</p>
                                <p class="applications__text text-black">Ул. Архитектора Калимуллина, д 4, п 1, кв 76
                                </p>
                            </div>
                            <div class="article-text-sub">
                                <p class="applications__text text-gray type">Редактировать:</p>
                            </div>
                            <div class="auth__inputs_input"><input class="auth__inputs_input" placeholder="Улица" name="street" type="text"></div>
                            <div class="article-inputs-short">
                                <form method="POST" action="">
                                <div class="auth__inputs_input short"><input class="auth__inputs_input short"placeholder="Дом" name="home" type="text"></div>
                                <div class="auth__inputs_input short"><input class="auth__inputs_input short"placeholder="Подъезд" name="entrance" type="text"></div>
                                <div class="auth__inputs_input short"><input class="auth__inputs_input short"placeholder="Этаж" name="floor" type="text"></div>
                                <div class="auth__inputs_input short"><input class="auth__inputs_input short"placeholder="Кв" name="apartment" type="text"></div>
                            </div>
                            <button class="article-button text-black" type="submit">Сохранить изменения</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="article__title text-black">Журнал заказов</div>
            <div class="order-box">
            <div class="orders__box">
                <div class="order__item">
                    <div class="article-text-sub">
                        <p class="applications__text text-gray type">Адрес:</p>
                        <p class="applications__text text-black">Ул. Архитектора Калимуллина, д 4, п 1, кв 76
                        </p>
                    </div>
                    <div class="article-text-sub">
                        <p class="applications__text text-gray type">Цена:</p>
                        <p class="applications__text text-black">4000 р.
                        </p>
                    </div>

                    <div class="applications__text_container">
                        <div class="applications__text_box">
                            <p class="applications__text text-gray type">Тип мусора:</p>
                            <p class="applications__text text-black">Пластик</p>
                            <p class="applications__text text-black">Картон</p>
                        </div>
                        <div class="applications__text_box">
                            <p class="applications__text text-gray type">Забрать:</p>
                            <p class="applications__text text-black">20:00</p>
                        </div>
                        <div class="applications__text_box">
                            <p class="applications__text text-gray type">Номер заказа:</p>
                            <p class="applications__text text-black">12</p>
                        </div>

                    </div>


                </div>


                    <div class="order__item">
                        <div class="article-text-sub">
                            <p class="applications__text text-gray type">Адрес:</p>
                            <p class="applications__text text-black">Ул. Архитектора Калимуллина, д 4, п 1, кв 76
                            </p>
                        </div>
                        <div class="article-text-sub">
                            <p class="applications__text text-gray type">Цена:</p>
                            <p class="applications__text text-black">4000 р.
                            </p>
                        </div>

                        <div class="applications__text_container">
                            <div class="applications__text_box">
                                <p class="applications__text text-gray type">Тип мусора:</p>
                                <p class="applications__text text-black">Пластик</p>
                                <p class="applications__text text-black">Картон</p>
                            </div>
                            <div class="applications__text_box">
                                <p class="applications__text text-gray type">Забрать:</p>
                                <p class="applications__text text-black">20:00</p>
                            </div>
                            <div class="applications__text_box">
                                <p class="applications__text text-gray type">Номер заказа:</p>
                                <p class="applications__text text-black">12</p>
                            </div>
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
