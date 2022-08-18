@extends('layouts.app')

@section('content')
<x-placeholder>
            <div class="px-4 py-5 my-5 text-center">
                <h1 class=" fw-bold d-flex justify-content-center">О нас</h1>
                <div class="col-lg-12 mx-auto">
                    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class=""></div>
                </div>
            </div>
</x-placeholder>

<div class="title__section__1">
        <div class="container">
            <h1>О нас</h1>
        </div>
    </div>
<br><br>

<div class="container">
    <div class="row">
        <div class="about_sect col-12 ">
            <p><b>Saint-Gobain PAM</b>  является мировым лидером в производстве и продаже комплексных решений для транспортировки питьевой и сырой воды .<br>
                <ul>
                    <li>питьевая вода : вода, циркулирующая в распределительной сети, пригодная для потребления человеком. </li>
                    <li>сырая вода : неочищенная вода, которая еще не была введена в распределительную сеть. </li>
                </ul>
                Компания Saint-Gobain PAM Canalisation предлагает широкий ассортимент трубопроводов из ковкого чугуна с покрытиями и уплотнениями, адаптированными и адаптируемыми к различным конфигурациям местности и различным типам окружающей среды.
                <br><br>
                Трубы Saint-Gobain PAM, комплексные решения для труб, устойчивые ко всем опасностям при транспортировке, обращении, монтаже и эксплуатации.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="about_sect col-12 d-flex justify-content-center">
            <img src="{{asset('assets/images/ws-watercycle1_0.jpg')}}">
            
        </div>
        <div class="about_sect col-12 d-flex justify-content-center">
            <p>Круговорт воды</p>
        </div>
    </div>
</div>

<div class="title__section__1">
        <div class="container">
            <h1>Наши решения</h1>
        </div>
    </div>
<br><br>

<div class="container">
    <div class="row">
        <div class="about_sect col-12 ">
            <div class="swiper mySwiper">
                <div class="about_sect swiper-wrapper">
                    @foreach($brands as $brand)
                    <div class="about_sect swiper-slide">
                        <img width="210" height="135" src="{{asset('storage/'.$brand->logo)}}" alt="{{ $brand->name }}">
                        <a class="d-flex justify-content-center" href="/brand/{{ $brand->id }}" style="text-decoration:none;color:#222;">Бренд решения</a>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next" style="margin:0px -12px 0px 0px;"></div>
                <div class="swiper-button-prev" style="margin:0px  0px 0px -12px ;"></div>
            </div>
        </div>
    </div>
</div>

<br><br>
@endsection