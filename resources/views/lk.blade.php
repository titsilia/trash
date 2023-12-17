<!DOCTYPE html>
<html lang="ru">

<x-index-head/>

<body>
    <x-header />
    <main class="center">
        <div class="article__title text-blue">Личный кабинет</div>
        <div class="lk-box">
            <div class="lk-border">
                <div class="article-text-sub">
                    <p class="applications__text text-gray type">ФИО: </p>
                    <p class="applications__text text-black">{{Auth::user()->name}} {{Auth::user()->surname}} {{Auth::user()->patronymic}}</p>
                </div>
                <div class="article-text-sub">
                    <p class="applications__text text-gray type">Номер телефона:</p>
                    <p class="applications__text text-black">{{Auth::user()->telephone}}</p>
                </div>
                <div class="article-text-sub">
                    <p class="applications__text text-gray type">Почта:</p>
                    <p class="applications__text text-black">{{Auth::user()->email}}</p>
                </div>
                <div class="article-text-sub">
                    <p class="applications__text text-gray type">Редактировать:</p>
                </div>
                    <form method="POST" action="/lk_update" class="auth__inputs_lk">
                        @csrf
                                <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Фамилия" value="{{Auth::user()->surname}}" name="surname" type="text"></div>
                                <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Имя" value="{{Auth::user()->name}}" name="name" type="text"></div>
                                <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="Отчество" value="{{Auth::user()->patronymic}}" name="patronymic" type="text"></div>
                                <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="+(700)202-22-92" value="{{Auth::user()->telephone}}" name="telephone" type="tel"></div>
                                <div class="auth__inputs_inputs"><input class="auth__inputs_input" placeholder="nazgulenok78@gmail.com" value="{{Auth::user()->email}}" name="email" type="email"></div>
                                <div class="article-text-sub">
                                    <p class="applications__text text-gray type">Изменить пароль:</p>
                                    <input class="auth__inputs_input" placeholder="Введите пароль" type="password" name="password">
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
                    <? if($applications) { ?>
                    @foreach($applications as $application)
                        <div class="order__item">
                            <div class="article-text-sub">
                                <p class="applications__text text-gray type">Номер заказа:</p>
                                <p class="applications__text text-black">{{$application->id_app}}</p>
                            </div>

                            <div class="applications__text_container">
                                <div class="applications__text_box">
                                    <p class="applications__text text-gray type">Адрес:</p>
                                    <p class="applications__text text-black">{{$application->address}}</p>
                                </div>
                                <div class="applications__text_box">
                                    <p class="applications__text text-gray type">Тип мусора:</p>
                                    <p class="applications__text text-black">{{$application->trashType->type_text}}</p>
                                </div>
                                <div class="applications__text_box">
                                    <p class="applications__text text-gray type">Забрать:</p>
                                    <p class="applications__text text-black">{{$application->date}}</p>
                                </div>

                                <div class="applications__text_box">
                                    <p class="applications__text text-gray type">Комментарий:</p>
                                    <p class="applications__text text-black">{{$application->comment}}</p>
                                </div>

                                <div class="applications__text_box">
                                    <p class="applications__text text-gray type">Статус:</p>
                                    <p class="applications__text text-black">{{$application->statusApp->status_type}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <? } else { ?>
                        <div class="article-text-sub">
                            <p class="applications__text text-gray type">У вас нет заявок</p>
                        </div>
                    <? } ?>
                </div>
                <div class="articles__numbers">
                {{ $applications->withQueryString()->links('pagination::bootstrap-5') }}
                </div>
            </div>





    </main>
    <x-footer />
</body>

</html>
