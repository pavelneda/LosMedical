@extends('layout')

@section('title')
    Контакти | LosMedical
@endsection


@section('content')

<section class="contacts">
    <div class="container">

        <h2 class="intro-right-title contacts-title" >Контактна інформація</h2>

        <div class="contacts-inner">

            <img src="/images/contacts-image.png" alt="">

            <p class="advertise-text contacts-text">Медичний центр LosMedical - клініка для всієї родини, яка складається з дитячого та дорослого відділень, відділення діагностики, лабораторії, хірургічного відділенні та стаціонару. В нашому медичному центрі наблюдаються як індивідуально, так і цілими сімьями. Сьогодні модно і престижно стало приділяти увагу своєму зовнішньому вигляду та здоров’ю.
            </p>

        </div>



        <div class="contacts-info">

            <div class="contacts-info-item">
                <p class="advertise-text contacts-text">
                    <i class="fa-solid fa-map-pin"></i>Адреса: вул. Академіка Янгеля 5, Київ.<br>
                    <i class="fa-solid fa-phone"></i>Тел. +38 098 228 45 69<br>
                    <i class="fa-solid fa-envelope"></i>Пошта: losmedical@med.com<br>
                    <br>
                    Головний лікар<br>
                    Слон Артур Вікторович<br>
                    Кабінет 5-34
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
