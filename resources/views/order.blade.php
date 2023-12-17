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
                        <form method="POST" action="/order_create">
                            @csrf
                            <div class="order__inputs_inputs"><input class="order__inputs_input order-ph"placeholder="Адрес" name="address" type="text">
                            </div>
                            <div class="order__type">
                                <div class="order__type_title">Тип мусора:</div>
                                <div class="order__title_checkbox text-white">
                                    <div class="glass-carton">
                                        <select name="type_trash">
                                            @foreach ($trashTypes as $item)
                                            <option value="{{$item->id}}">{{$item->type_text}}</option>
                                            @endforeach
                                          </select>
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
                                <select name="date">
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
