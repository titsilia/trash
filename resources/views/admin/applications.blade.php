<!DOCTYPE html>
<html lang="en">

<x-index-head/>

<body>
    <x-header />
    <main class="center">
        <div class="article__title text-red">Заявки</div>
        @foreach($applications as $item)
        <div class="applications__box">
            <div class="applications__item">
                <p class="applications__text text-gray">ФИО:</p>
                <p class="applications__text text-black name">{{$item->name}} {{$item->surname}} {{$item->patronymic}}</p>

                <div class="applications__text_container">
                    <div class="applications__text_box">
                        <p class="applications__text text-gray type">Тип мусора:</p>
                        <p class="applications__text text-black">{{$item->trashType->type_text}}</p>
                    </div>
                    <div class="applications__text_box">
                        <p class="applications__text text-gray type">Забрать:</p>
                        <p class="applications__text text-black">{{$item->date}}</p>
                    </div>
                    <div class="applications__text_box">
                        <p class="applications__text text-gray type">Номер заказа:</p>
                        <p class="applications__text text-black">{{$item->id_app}}</p>
                    </div>

                </div>
            </div>
            <div class="applications__item">
                <p class="applications__text text-gray">Адрес:</p>
                <p class="applications__text text-black name">{{$item->address}}</p>
                <p class="applications__text text-gray">Цена:</p>
                <p class="applications__text text-black name">4000 р.</p>
            </div>
            <div class="applications__item">
                <div class="app__btns">
                    <form action="">
                        <div>
                            <a class="btn-block article-button text-black"  href="/admin_applications/{{ $item->id_app }}/confirm">
                                Принято
                                <img src="">
                            </a>
                        </div>
                        <div>
                            <a class="btn-block article-button text-black"  href="/admin_applications/{{ $item->id_app }}/deny">
                                Отклонено
                                <img src="">
                            </a>
                        </div>
                        <div>

                        </div>
                    </form>
            </div>
            </div>
        </div>
        @endforeach
        <div class="articles__numbers">
        {{ $applications->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
        </div>



    </main>
    <x-footer />
</body>

</html>
