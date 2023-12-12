<!DOCTYPE html>
<html lang="ru">

<x-index-head/>

<body>
    <x-header />
    <main class="center">
        <div class="order__container">
            <div class="order__item_right-box">
                <div class="order__item_right bg-green subtitle-low text-white">
                    <div class="order__item_right-text">Наша команда высококвалифицированных специалистов приедет к вашему порогу, чтобы забрать ваш мусор.</div>
                    <div class="order__item_right-text">Мы не побеспокоим вас выполняя нашу работу.  я реально не знаю что писать </div>
                </div>

            </div>
            <div class="order-item order-red bg-red">
                <div class="article__title text-white">Оформление Заказа</div>
                <div class="order__info">
                    <div class="order__info_left">
                        <form method="POST" action="">
                            <div class="order__inputs_inputs"><input class="order__inputs_input order-ph"placeholder="Фамилия" name="surname" type="text"></div>
                            <div class="order__inputs_inputs"><input class="order__inputs_input order-ph" placeholder="Имя" name="name" type="text"></div>
                            <div class="order__inputs_inputs"><input class="order__inputs_input order-ph"placeholder="Отчество" name="patronymic" type="text"></div>
                            <div class="order__inputs_inputs order-bt"><input class="order__inputs_input order-ph"placeholder="+(700)202-22-92" name="phone" type="tel"></div>
                            <div class="order__inputs_inputs"><input class="order__inputs_input order-ph"placeholder="nazgulenok78@gmail.com" name="email" type="email"></div>
                            <div class="order__inputs_inputs"><input class="order__inputs_input order-ph"placeholder="Адрес" name="street" type="text">
                            </div>
                            <div class="order__type">
                                <div class="order__type_title">Тип мусора:</div>
                                <div class="order__title_checkbox text-white">
                                    <div class="glass-carton">
                                                <div><input  type="checkbox" id="glass" name="glass"/><label class="order-checbox" for="glass">Стекло</label></div>
                                                <div><input type="checkbox" id="carton" name="carton"/><label class="order-checbox" for="carton">Картон</label></div>
                                            </div>
                                            <div class="plastic-organika">
                                                <div><input type="checkbox" id="plastic" name="plastic" /><label class="order-checbox" for="plastic">Пластик</label></div>
                                                <div><input type="checkbox" id="organika" name="organika" /><label class="order-checbox" for="organika">Органика</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="input__comment">
                                <textarea class="tacontent" name="comment" id="" cols="40" rows="10" placeholder="Оставьте комментарий"></textarea>
                            </div>
                    </div>

                    <div class="order__info_right">
                        <div class="order__time">
                            <div class="order__type_title">Время доставки:</div>
                            <div class="time__buttons-one">
                                <select name="select">
                                    <option value="8:00">8:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="22:00">22:00</option>
                                  </select>
                            </div>
                        </div>
                            <div class="button__price">
                                <p class="text-white subtitle-low">Цена</p>
                                <p class="text-white subtitle">4000 р.</p>
                                <button class="order__button subtitle">Отправить заявку</button>
                            </div>

                    </div>
                </div>
                        </form>
                    </div>
            </div>

        </div>


    </main>
    <x-footer />

</body>

</html>
