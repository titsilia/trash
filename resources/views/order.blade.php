<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>
    <x-header-auth />
    <main class="center">
        <div class="order__container">
            <div class="order-item order-red bg-red">
                <div class="article__title text-white">Оформление Заказа</div>
                <div class="order__info">
                    <div class="order__info_main text-white">
                        <form method="POST" action="">
                                        <div class="order__inputs_input"><input class="order__inputs_input order-ph"placeholder="Фамилия" name="surname" type="text"></div>
                                        <div class="order__inputs_input"><input class="order__inputs_input order-ph" placeholder="Имя" name="name" type="text"></div>
                                        <div class="order__inputs_input"><input class="order__inputs_input order-ph"placeholder="Отчество" name="patronymic" type="text"></div>
                                        <div class="order__inputs_input order-bt"><input class="order__inputs_input order-ph"placeholder="+(700)202-22-92" name="phone" type=""></div>
                                        <div class="order__inputs_input"><input class="order__inputs_input order-ph"placeholder="nazgulenok78@gmail.com" name="email" type="email"></div>
                                        </div>
                                        <div class="order__info_side">
                                        <div class="order__inputs_input "><input class="order__inputs_input order-ph"placeholder="Улица" name="street" type="text">
                                        </div>
                                        <div class="order__inputs_aside">
                                            <div class="order__inputs_side"><input class="order__inputs_side order-ph"placeholder="Дом" name="home" type="text"></div>
                                            <div class="order__inputs_side"><input class="order__inputs_side order-ph"placeholder="Подъезд" name="entrance" type="text"></div>
                                            <div class="order__inputs_side"><input class="order__inputs_side order-ph"placeholder="Этаж" name="floor" type="text"></div>
                                            <div class="order__inputs_side"><input class="order__inputs_side order-ph" placeholder="Кв" name="apartment" type="text"></div>

                                    </div>
                                </div>
                            </div>

                            <div class="order-time-type">
                                <div class="order__type">
                                    <div class="order__type_title">Тип мусора:</div>
                                    <div class="order__title_checkbox text-white">
                                        <div class="glass-carton">
                                            <form method="POST" action="">
                                                    <div><input type="checkbox" id="glass" name="glass" /><label for="scales">Стекло</label></div>
                                                    <div><input type="checkbox" id="carton" name="carton" /><label for="horns">Картон</label></div>
                                                </div>
                                                <div class="plastic-organika">
                                                    <div><input type="checkbox" id="plastic" name="plastic" /><label for="scales">Пластик</label></div>
                                                    <div><input type="checkbox" id="organika" name="organika" /><label for="horns">Органика</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order__time">
                                    <div class="order__type_title">Время доставки:</div>
                                    <div class="time__buttons-one">
                                        <input type="button" class="time__button" value="8:00">
                                        <input type="button" class="time__button" value="10:00">
                                        <input type="button" class="time__button" value="12:00">
                                        <input type="button" class="time__button" value="14:00">
                                    </div>
                                    <div class="time__buttons-two">
                                        <input type="button" class="time__button" value="16:00">
                                        <input type="button" class="time__button" value="18:00">
                                        <input type="button" class="time__button" value="20:00">
                                        <input type="button" class="time__button" value="22:00">
                                    </div>
                                </div>


                                </div>
                                <div class="comment-price">
                                    <div class="input__comment">
                                        <textarea class="tacontent" name="comment" id="" cols="30" rows="10" placeholder="Оставьте комментарий"></textarea>
                                    </div>
                                    <div class="button__price">
                                        <p class="text-white subtitle-low">Цена</p>
                                        <p class="text-white subtitle">4000 р.</p>
                                        <button class="order__button subtitle" type="submit">Перейти к оплате</button>
                                    </div>
                            </form>
                </div>
            </div>
            <div class="order__item_right-box">
                <div class="order__item_right bg-green subtitle-low text-white">
                    <div class="order__item_right-text">Наша команда высококвалифицированных специалистов приедет к вашему порогу, чтобы забрать ваш мусор.</div>
                    <div class="order__item_right-text">Мы не побеспокоим вас выполняя нашу работу.  я реально не знаю что писать </div>
                </div>
                <div class="order__item_right-blue text-white bg-blue">
                    <div class="subtitle text-white">Ваш заказ:</div>
                    <div class="">
                        <p class="subtitle-low text-white">Заказчик:</p>
                        <p>Мухаметьянова Айназ Рашидовна</p>
                        <p>nanan@gmail.com</p>
                        <p>+20303-232--230</p>
                    </div>
                    <div class="">
                        <p class="subtitle-low text-white">Адрес:</p>
                        <p>Ул. Архитектора Калимуллина 4, кв 76, 1п</p>
                    </div>
                    <div class="">
                        <p class="subtitle-low text-white">Тип мусора:</p>
                        <p>Пластик</p>
                    </div>
                    <div class="">
                        <p class="subtitle-low text-white">Заберем в:</p>
                        <p>20:00</p>
                    </div>
                    <div>
                        <p>Комментарий:</p>
                        <p>аоаооа битбокс батл с кактусом</p>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <x-footer />
</body>

</html>
