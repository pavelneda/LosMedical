@extends('layout')

@section('title')
    LosMedical
@endsection


@section('content')

    <section class="intro">
        <div class="container">
            <div class="intro-iner">

                <img src="/images/intro.png" alt="">

                <div class="intro-right">
                    <h2 class="intro-right-title" >Медицинские технологии 22 века</h2>
                    <p class="intro-right-text" >Наша клиника входит в число лучших по борьбе с коронавирусом. Качество и цена являются нашим приоритетом. Записывайтесь на прием 24/7!
                    </p>
                </div>


            </div> <!--/.intro-iner-->
        </div> <!--/.container-->
    </section> <!--/.intro-->



    <section class="benefits">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Разумное лечение любых болезней</h2>
                <p class="section-text">LosHealth – наш уникальный алгоритм лечения, который анализирует каждого клиента по многим критериям и выбирает индивидуальный курс лечения.
                </p>
            </div>


            <div class="benefits-list">
                <div class="benefits-item">
                    <img src="/images/benf1.png" alt="">
                    <h3 class="benefit-title">Лучшее лекарство</h3>
                    <span class="benefit-text">Мы используем новейшие лекарства, прошедшие все тесты.</span>
                </div>

                <div class="benefits-item">
                    <img src="/images/benf3.png" alt="">
                    <h3 class="benefit-title">Здоровое питание</h3>
                    <span class="benefit-text">Питание в клинике на уровне ресторана при соблюдении норм.</span>
                </div>

                <div class="benefits-item">
                    <img src="/images/benf2.png" alt="">
                    <h3 class="benefit-title">Доступная цена</h3>
                    <span class="benefit-text">Качественное лечение по цене региональных лечебниц.</span>
                </div>

            </div>

        </div> <!--/.container-->
    </section> <!--/.benefits-->



    <section class="advertises">
        <div class="container">

            <div class="advertise">
                <div class="advertise-info">
                    <h2 class="advertise-title">Рекордная борьба с Covid-19</h2>
                    <p class="advertise-text">В эпоху пандемии вы полностью можете довериться нам, потому что у нас один из самых высоких процентов выздоровления в Европе. Это обеспечивают опытные врачи и новое оборудование из США.
                    </p>

                    <a class="btn scroll-btn"><i class="fa fa-hand-point-right"></i><span>Стать клиентом</span></a>
                </div>

                <img src="/images/covid-19.png" alt="">
            </div>



            <div class="advertise">
                <img src="/images/bestmedic.png" alt="">

                <div class="advertise-info">
                    <h2 class="advertise-title">Лучшие медики из всей страны</h2>
                    <p class="advertise-text">Весь персонал отвечает европейским стандартам. Многие наши врачи имеют ученые степени. Мы предоставляем лучшие условия труда, поэтому к нам идут наилучшие специалисты.
                    </p>

                    <a class="btn scroll-btn"><i class="fa fa-hand-point-right"></i><span>Позвонить</span></a>
                </div>
            </div>

        </div><!--/.container-->
    </section><!--/.advertises-->



    <section class="statistic">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title">Эти цифры – реальный показатель нашей работы</h2>
            </div>


            <div class="stat">
                <div class="stat-item">
                    <h3 class="stat-title">100 000+</h3>
                    <p class="stat-text">Пациентов вылечено</p>
                </div>

                <div class="stat-item">
                    <h3 class="stat-title">500+</h3>
                    <p class="stat-text">Квалифициро ванных врачей</p>
                </div>

                <div class="stat-item">
                    <h3 class="stat-title">50 000+</h3>
                    <p class="stat-text">Анализов ежегодно</p>
                </div>

                <div class="stat-item">
                    <h3 class="stat-title">1 000+</h3>
                    <p class="stat-text">Обращений ежемесячно</p>
                </div>

            </div>
        </div><!--/.container-->
    </section><!--/.statistic-->



    <section class="partners">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Мы сотрудничаем с ведущими компаниями</h2>
            </div>

            <div class="partners-list">
                <div class="partners-item"><img  src="/images/partner1.png" alt=""></div>
                <div class="partners-item"><img src="/images/partner2.png" alt=""></div>
                <div class="partners-item"><img src="/images/partner3.png" alt=""></div>
                <div class="partners-item"><img src="/images/partner4.png" alt=""></div>
            </div>


        </div><!--/.container-->
    </section><!--/.partners-->



    <section class="call">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Чтобы найти врача оставьте номер или позвоните нам!</h2>
            </div>

            <div class="call-iner">

                <form action="/callform" method="post" class="call-form">
                    @csrf
                    <input class="call-input" type="tel" name="number" id="number" placeholder="38 (___) ___ __ __">
                    <button class="call-button" type="submit">Позвонить мне</button>
                </form>


                <div class="call-numbers">
                    <div class="number">
                        <a  href="tel:+380982284569"><i class="fa-solid fa-phone"></i></a>
                        +380 (098) 228 45 69
                    </div>
                    <div class="number">
                        <a href="tel:+380983450277"><i class="fa-solid fa-phone"></i></a>
                        +380 (098) 345 02 77
                    </div>
                </div>
            </div>

        </div> <!--/.container-->
    </section> <!--/.call-->




@endsection
