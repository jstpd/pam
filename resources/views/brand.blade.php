@extends('layouts.app')

@section('content')
<x-placeholder>
            <div class="px-4 py-5 my-5 text-center">
                <h1 class="fw-bold d-flex justify-content-center">Бренд решения</h1>
                <img class="main_indexs" src="{{asset('storage/'.$brand->logo_big)}}" width="450" class="">
                <div class="col-lg-12 mx-auto">
                    <p class="lead mb-4">{{ $brand->description }}</p>
                    <div class=""></div>
                </div>
            </div>
</x-placeholder>

<div class="title__section__1">
        <div class="container">
            <h1>Бренд решения</h1>
        </div>
    </div>
<br><br>

<div class="container">
    <div class="row">
        <div class="main_imgs col-12 d-flex justify-content-center text-center align-items-center">
            <img src="{{asset('storage/'.$brand->logo_big)}}" width="450" class=""><br>
            <h4>{{ $brand->name }}</h4>
        </div>
        <div class="col-6">
            
        </div>
        <div class="about_sect col-12 ">
            <p>{!! $brand->prologue !!}</p>
        </div>
    </div>
    <div class="row">
        <div class="about_sect col-12 d-flex justify-content-center">
            <img src="{{asset('storage/'.$brand->image)}}">
        </div>
        <div class="about_sect col-12">
        {!! $brand->page !!}
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
                    @foreach($catalog as $item)
                    <div class="about_sect swiper-slide">
                        <div class="card-swiper">
                            <img class="mb-3" width="100%" src="{{asset('storage/'.$item->image)}}">
                            <span>{{ $item->brand_id }}</span><br>
                            <a href="/tuyau-blutop-biozinaliumr" rel="bookmark">{{ $item->name }}</a>
                            <hr>
                            <ul>
                                {{-- @foreach(json_decode($item->params) as $it)
                                <li><small>{{ $it['name'] }}</small><small><b>{{ $it['value'] }}</b></small></li>
                                @endforeach --}}
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection