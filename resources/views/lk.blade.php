<!DOCTYPE html>
<html lang="ru">

<x-index-head/>

<body>
    <x-header />
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
                    <form method="POST" action="" class="auth__inputs_lk">
                                <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Фамилия" value="" name="surname" type="text"></div>
                                <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Имя" value="" name="name" type="text"></div>
                                <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Отчество" value="" name="patronymic" type="text"></div>
                                <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="+(700)202-22-92" value="" name="phone" type="tel"></div>
                                <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="nazgulenok78@gmail.com" value="" name="email" type="email"></div>
                                <div class="article-text-sub">
                                    <p class="applications__text text-gray type">Изменить пароль:</p>
                                    <input class="auth__inputs_input" placeholder="Введите пароль" type="password" name="repeat_password">
                                </div>

                                <button class="article-button text-black">Сохранить изменения</button>

                        </div>

                
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
