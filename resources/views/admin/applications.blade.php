<!DOCTYPE html>
<html lang="en">

<x-index-head/>

<body>
    <x-header />
    <main class="center">
        <div class="article__title text-red">Заявки</div>
        <div class="applications__box">
            <div class="applications__item">
                <p class="applications__text text-gray">ФИО:</p>
                <p class="applications__text text-black name">Ноунеймов Ноунейм Ноунеймович</p>

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
            <div class="applications__item">
                <p class="applications__text text-gray">Адрес:</p>
                <p class="applications__text text-black name">Ул. Архитектора Калимуллина, д 4, п 1, кв 76</p>
                <p class="applications__text text-gray">Цена:</p>
                <p class="applications__text text-black name">4000 р.</p>
            </div>
            <div class="applications__item">
                <form action="">
                    <div>
                        <a class="btn-block article-button text-black"  href="">
                            Принято
                            <img src="">
                        </a>
                    </div>
                    <div>
                        <a class="btn-block article-button text-black"  href="">
                            Отклонено
                            <img src="">
                        </a>
                    </div>
                    <div>
                        <a class="btn-block article-button text-black"  href="">
                            Выполнено
                            <img src="">
                        </a>

                    </div>
                </form>
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
