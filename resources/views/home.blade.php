@extends('layouts.app')

@section('content')
<x-placeholder>
            <div class=" col-12 col-md-10 col-lg-8 d-flex justify-content-center flex-column">
                <img class="animate__animated animate__bounceInDown" src="{{asset('assets/svg/logo_9.svg')}}" style="animation-duration: 1s;">
                <p class="lead mb-4 animate__animated animate__bounceInUp" style="animation-duration: 1s; animation-delay: 0.5s;">
                    Южнный мередиан производит и поставляет инженерные сооружения и промышленное оборудование для систем канализации, водоснабжения, водоподготовки и очистных сооружений.
                    Южнный мередиан основана в 2004 году, за этот период был пройден путь от локального предприятия до группы производственных компаний.
                </p>
            </div>
</x-placeholder>

<section>
    <div class="title__section__1">
        <div class="container">
            <h1 class="animate__animated animate__bounceInDowm">Виды продукции</h1>
        </div>
    </div>
    <br><br>
    <div class="container-fluid col-xxl-8 px-4 py-5" style="position:relative">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-6 col-sm-6 col-lg-6 main_div">
                <div class="main_div_1">
                    <div class="row">
                        <img class="main_img sss me-4" src="https://img.freepik.com/free-photo/steel-pipelines-and-cables-in-a-plant_1359-140.jpg?w=1380" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="150" height="200" loading="lazy">
                        <img class="main_img sss" src="https://img.freepik.com/free-photo/steel-pipelines-and-cables-in-a-plant_1359-147.jpg?t=st=1656237485~exp=1656238085~hmac=aa7d6c5864fc1b752051a4e8727604fb248645fa4aeca41f31c6b4c9e75286d7&w=1380" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="150" height="200" loading="lazy">
                    </div>
                </div>
                <div class="row mt-4" style="float:right">
                    <img class="main_img rrr " src="https://img.freepik.com/free-photo/steel-pipelines-and-cables-in-a-plant_1359-143.jpg?w=1380" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="350" height="350" loading="lazy">
                </div>
            </div>

            <div class="col-lg-6 text-dark">
                <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="title__section__1">
        <div class="container">
            <h1>Преимущества</h1>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col text-center">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
                    <img class="bi me-2" height="48" he src="https://cdn-icons-png.flaticon.com/512/992/992700.png">
                </div>
                <h2>18 лет <br> на рынке</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </div>
            <div class="feature col text-center">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center  text-white fs-2 mb-3">
                    <img class="bi me-2" height="48" he src="https://cdn-icons-png.flaticon.com/512/912/912318.png">
                </div>
                <h2>81 сертифицированный сотрудник</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </div>
            <div class="feature col text-center">
            
                <div class="feature-icon d-inline-flex align-items-center justify-content-center  text-white fs-2 mb-3">
                    <img class="bi me-2" height="48" he src="https://cdn-icons-png.flaticon.com/512/1401/1401914.png">
                </div>
                <h2>6300 компаний <br>с нами</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </div>
        </div>
    </div>
</section>

<section class="dfreeloader__grid2 mt-5 mb-5">
    <div class="title__section__1">
        <div class="container">
            <h1>Новости и статьи</h1>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            @foreach($articles as $article)
            <div class="col-md-3"> 
                <div class="card" style="width: 15rem;">
                    <img src="{{asset('storage/'.$article->logo)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{!! $article->description !!}</p>
                        <a href="{{ route('article', $article->id) }}" class="btn btn-primary">Читать</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section >
    <div class="title__section__1">
        <div class="container">
            <h1>Наши клиенты и партнеры</h1>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($partners as $partner)
                <div class="swiper-slide ssss"><img width="210" height="135" src="{{asset('storage/'.$partner->src)}}" alt="{{ $partner->name }}"></div>
                @endforeach
            </div>
        </div>
    </div>
</section>  


<section>
    <div class="title__section__1">
        <div class="container">
            <h1>FAQs</h1>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    @foreach ($faqs as $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $faq->id }}">
                            <button class="accordion-button {{ $faq->collapsed ? 'collapsed' : ''}}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="{{ $faq->collapsed ? 'true' : 'false'}}" aria-controls="collapse{{ $faq->id }}">
                                {{ $faq->title }}
                            </button>
                        </h2>
                        <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse {{ $faq->collapsed ? 'show' : ''}}" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $faq->text !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

@endsection
