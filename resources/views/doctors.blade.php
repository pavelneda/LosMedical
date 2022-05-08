@extends('layout')

@section('title')
    Наші лікарі | LosMedical
@endsection


@section('content')

    <section class="doctors">
        <div class="container">
            <h2 class="intro-right-title doctors-title" >Лікарі медичного центру</h2>

            <div class="doctors-list">

                @foreach($doctors as $doctor)
                    <div class="doctors-item">
                        <img src="/images/{{ $doctor->img }}" alt="">
                        <div class="doctors-info">
                            <h3 class="doctors-name">{{ $doctor->name }}</h3>
                            <p class="benefit-text doctors-prof">{{ $doctor->prof }}</p>
                            <span class="doctors-exp"><i class="fa-regular fa-clock"></i>Досвід роботи: {{ $doctor->exp }} років</span>
                            <a href="tel:{{ $doctor->tel }}" class="btn doctors-btn">
                                Записатись на прийом
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div> <!--/.container-->
    </section> <!--/.doctors-->
@endsection
