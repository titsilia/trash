<!DOCTYPE html>
<html lang="ru">

<x-index-head/>

<body>
    <x-header />
    <main class="center">
        <div class="order__container">
            <div class="order-item order-red bg-red">
                <div class="article__title text-white">Оформление Заказа</div>
                <div class="order__info">
                    <div class="order__info_main text-white">
                        <form method="POST" action="">
                            <div class="order__inputs_inputs"><input class="order__inputs_input order-ph"placeholder="Фамилия" name="surname" type="text"></div>
                            <div class="order__inputs_inputs"><input class="order__inputs_input order-ph" placeholder="Имя" name="name" type="text"></div>
                            <div class="order__inputs_inputs"><input class="order__inputs_input order-ph"placeholder="Отчество" name="patronymic" type="text"></div>
                            <div class="order__inputs_inputs order-bt"><input class="order__inputs_input order-ph"placeholder="+(700)202-22-92" name="phone" type=""></div>
                            <div class="order__inputs_inputs"><input class="order__inputs_input order-ph"placeholder="nazgulenok78@gmail.com" name="email" type="email"></div>
                            </div>
                            <div class="order__info_side">
                                <div class="order__inputs_inputs"><input class="order__inputs_input order-ph"placeholder="Улица" name="street" type="text">
                                </div>
                                <div class="order__inputs_aside">
                                    <div class="order__inputs_sides"><input class="order__inputs_side order-ph"placeholder="Дом" name="home" type="text"></div>
                                    <div class="order__inputs_sides"><input class="order__inputs_side order-ph"placeholder="Подъезд" name="entrance" type="text"></div>
                                </div>
                                <div class="order__inputs_aside">
                                <div class="order__inputs_sides"><input class="order__inputs_side order-ph"placeholder="Этаж" name="floor" type="text"></div>
                                    <div class="order__inputs_sides"><input class="order__inputs_side order-ph" placeholder="Кв" name="apartment" type="text"></div>
                                </div>

                                </div>
                            </div>

                            <div class="order-time-type">
                                <div class="order__type">
                                    <div class="order__type_title">Тип мусора:</div>
                                    <div class="order__title_checkbox text-white">
                                        <div class="glass-carton">
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
                                        <select name="select">
                                            <option value="value1" selected>8:00</option>
                                            <option value="value2" >10:00</option>
                                            <option value="value3">12:00</option>
                                            <option value="value3">14:00</option>
                                            <option value="value3">16:00</option>
                                            <option value="value3">18:00</option>
                                            <option value="value3">20:00</option>
                                            <option value="value3">22:00</option>
                                          </select>
                                    </div>
                                    <div class="time__buttons-two"></div>
                                </div>


                                </div>
                                <div class="comment-price">
                                    <div class="input__comment">
                                        <textarea class="tacontent" name="comment" id="" cols="40" rows="10" placeholder="Оставьте комментарий"></textarea>
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
