@extends('layout')

@section('title')
    LosMedical
@endsection


@section('content')

    <section class="intro">
        <div class="container">
            <div class="intro-iner">

                <img src="../images/intro.png" alt="">

                <div class="intro-right">
                    <h2 class="intro-right-title" >Медичні технології 22 століття</h2>
                    <p class="intro-right-text" >Наша клініка входить в число найкращих по боротьбі з коронавірусом.  Якість та ціна є нашим пріорітетом. Записуйтесь на прийом 24/7!
                    </p>
                </div>


            </div> <!--/.intro-iner-->
        </div> <!--/.container-->
    </section> <!--/.intro-->



    <section class="benefits">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Розумне лікування будь-яких хвороб</h2>
                <p class="section-text">LosHealth — наш унікальний алгоритм лікування, який аналізує кожного клієнта по багатьом критеріям і обирає індивідуальний курс лікування.
                </p>
            </div>


            <div class="benefits-list">
                <div class="benefits-item">
                    <img src="../images/benf1.png" alt="">
                    <h3 class="benefit-title">Ефективні ліки</h3>
                    <span class="benefit-text">Ми використовуємо новітні ліки, які пройшли всі тести.</span>
                </div>

                <div class="benefits-item">
                    <img src="../images/benf3.png" alt="">
                    <h3 class="benefit-title">Здорове харчування</h3>
                    <span class="benefit-text">Харчування в клініці на рівні ресторану при дотриманні всіх норм.</span>
                </div>

                <div class="benefits-item">
                    <img src="../images/benf2.png" alt="">
                    <h3 class="benefit-title">Доступна ціна</h3>
                    <span class="benefit-text">Якісне лікування за ціною регіональних лікарень.</span>
                </div>

            </div>

        </div> <!--/.container-->
    </section> <!--/.benefits-->



    <section class="advertises">
        <div class="container">

            <div class="advertise">
                <div class="advertise-info">
                    <h2 class="advertise-title">Рекордна боротьба з Covid-19</h2>
                    <p class="advertise-text">В епоху пандемії ви повністю можете довіритись нам, тому що у нас один з найвищих відсотків одужання в Європі. Це забезпечують досвідчені лікарі та нове обладнання з США.
                    </p>

                    <a class="btn scroll-btn"><i class="fa fa-hand-point-right"></i><span>Стати клієнтом</span></a>
                </div>

                <img src="../images/covid-19.png" alt="">
            </div>



            <div class="advertise">
                <img src="../images/bestmedic.png" alt="">

                <div class="advertise-info">
                    <h2 class="advertise-title">Найкращі медики із всієї країни</h2>
                    <p class="advertise-text">Весь персонал відповідає європейським стандартам. Багато наших лікарів мають вчені ступені. Ми надаємо найкращі умови праці, через те до нас ідуть накращі спеціалісти.
                    </p>

                    <a class="btn scroll-btn"><i class="fa fa-hand-point-right"></i><span>Зателефонувати</span></a>
                </div>
            </div>

        </div><!--/.container-->
    </section><!--/.advertises-->



    <section class="statistic">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title">Ці цифри — реальний показник нашої роботи</h2>
            </div>


            <div class="stat">
                <div class="stat-item">
                    <h3 class="stat-title">100 000+</h3>
                    <p class="stat-text">Пацієнтів вилікувано</p>
                </div>

                <div class="stat-item">
                    <h3 class="stat-title">500+</h3>
                    <p class="stat-text">Висококваліфік ованих лікарів</p>
                </div>

                <div class="stat-item">
                    <h3 class="stat-title">50 000+</h3>
                    <p class="stat-text">Аналізів щороку</p>
                </div>

                <div class="stat-item">
                    <h3 class="stat-title">1 000+</h3>
                    <p class="stat-text">Звернень щомісяця</p>
                </div>

            </div>
        </div><!--/.container-->
    </section><!--/.statistic-->



    <section class="partners">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ми співпрацюємо з ведучими компаніями</h2>
            </div>

            <div class="partners-list">
                <div class="partners-item"><img  src="../images/partner1.png" alt=""></div>
                <div class="partners-item"><img src="../images/partner2.png" alt=""></div>
                <div class="partners-item"><img src="../images/partner3.png" alt=""></div>
                <div class="partners-item"><img src="../images/partner4.png" alt=""></div>
            </div>


        </div><!--/.container-->
    </section><!--/.partners-->



    <section class="call">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Щоб знайти лікаря залиште номер або зателефонуйте нам!</h2>
            </div>

            <div class="call-iner">

                <form action="/callform" method="post" class="call-form">
                    @csrf
                    <input class="call-input" type="tel" name="number" id="number" placeholder="38 (___) ___ __ __">
                    <button class="call-button" type="submit">Зателефонувати мені</button>
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
