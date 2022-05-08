@extends('layout')

@section('title')
    Контакты | LosMedical
@endsection


@section('content')

<section class="contacts">
    <div class="container">

        <h2 class="intro-right-title contacts-title" >Контактная информация</h2>

        <div class="contacts-inner">

            <img src="/images/contacts-image.png" alt="">

            <p class="advertise-text contacts-text">Медицинский центр LosMedical – клиника для всей семьи, которая состоит из детского и взрослого отделений, отделения диагностики, лаборатории, хирургического отделения и стационара. В нашем медицинском центре наблюдаются как индивидуально, так и целыми семьями. Сегодня модно и престижно стало уделять внимание своему внешнему виду и здоровью.
            </p>

        </div>



        <div class="contacts-info">

            <div class="contacts-info-item">
                <p class="advertise-text contacts-text">
                    <i class="fa-solid fa-map-pin"></i>Адрес: ул. Академика Янгеля, 5, Киев.<br>
                    <i class="fa-solid fa-phone"></i>Тел. +38 098 228 45 69<br>
                    <i class="fa-solid fa-envelope"></i>Почта: losmedical@med.com<br>
                    <br>
                    Главный врач<br>
                    Слон Артур Викторович<br>
                    Кабинет 5-34
                </p>
            </div>

            <div class="contacts-info-item">
                <p class="advertise-text contacts-text">
                    <a class="contacts-link" href="#"><i class="fa-brands fa-facebook"></i>Facebook</a><br><br>

                    <a class="contacts-link" href="#"><i class="fa-brands fa-instagram"></i>Instagram</a><br><br>

                    <a class="contacts-link" href="#"><i class="fa-brands fa-telegram"></i>Telegram</a><br><br>

                    <a class="contacts-link" href="#"><i class="fa-brands fa-twitter"></i>Twitter</a>
                </p>
            </div>

        </div>

    </div> <!--/.container-->
</section> <!--/.contacts-->
@endsection
