<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Опа, мусорок</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <x-header-auth />
    <main class="center">
        <div class="order__container">
            <div class="order-item order-red bg-red">
                <div class="article__title text-white">Оформление Заказа</div>
                <div class="order__info">
                    <div class="order__info_main text-white">
                        <div class="order__inputs_input "><input class="order__inputs_input order-ph"placeholder="Фамилия" type="text"></div>
                        <div class="order__inputs_input"><input class="order__inputs_input order-ph" placeholder="Имя"type="text"></div>
                        <div class="order__inputs_input"><input class="order__inputs_input order-ph"placeholder="Отчество" type="text"></div>
                        <div class="order__inputs_input order-bt"><input class="order__inputs_input order-ph"placeholder="+(700)202-22-92" type="text"></div>
                        <div class="order__inputs_input"><input class="order__inputs_input order-ph"placeholder="nazgulenok78@gmail.com" type="text"></div>
                    </div>
                    <div class="order__info_side">
                        <div class="order__inputs_input "><input class="order__inputs_input order-ph"placeholder="Улица" type="text">
                        </div>
                        <div class="order__inputs_aside">
                            <div class="order__inputs_side "><input class="order__inputs_side order-ph"placeholder="Дом" type="text"></div>
                            <div class="order__inputs_side "><input class="order__inputs_side order-ph"placeholder="Подъезд" type="text"></div>
                            <div class="order__inputs_side "><input class="order__inputs_side order-ph"placeholder="Этаж" type="text"></div>
                            <div class="order__inputs_side "><input class="order__inputs_side order-ph" placeholder="Кв"type="text"></div>
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
                            <button class="time__button">8:00</button>
                            <button class="time__button">10:00</button>
                            <button class="time__button">12:00</button>
                            <button class="time__button">14:00</button>
                        </div>
                        <div class="time__buttons-two">
                            <button class="time__button">16:00</button>
                            <button class="time__button">18:00</button>
                            <button class="time__button">20:00</button>
                            <button class="time__button">22:00</button>
                        </div>
                    </div>


                </div>
                <div class="comment-price">
                    <div class="input__comment">
                        <textarea class="tacontent" name="" id="" cols="30" rows="10" placeholder="Оставьте комментарий"></textarea>
                    </div>
                    <div class="button__price">
                        <p class="text-white subtitle-low">Цена</p>
                        <p class="text-white subtitle">4000 р.</p>
                        <button class="order__button subtitle">Перейти к оплате</button>
                    </div>
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
