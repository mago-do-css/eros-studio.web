@extends('layouts.main')

@section('title', 'Eros - Home')


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/box-case.css') }}">
    <link rel="stylesheet" href="{{ asset('css/box-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/accordion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('header')

@endsection

@section('content')
    <section class="section-width">
        <h1>Damos forma ao invisível! Transformamos a essência única de cada marca em narrativas que geram resultados
            tangíveis no mercado!</h1>
        <x-common.link-underline class="my-3 flex" text="+Saiba mais sobre a Eros" link="#"></x-common.link-underline>
        <div class="container-box flex justify-between">
            @php
                $photos = [
                    [
                        'title' => 'Kushã Shawe',
                        'subtitle' => 'IDENTIDADE VISUAL, PACKAGING',
                        'text' =>
                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque enim porttitor eros laoreet, sit amet feugiat erat porta.',
                        'imageName' => 'post01.jpg',
                    ],
                    [
                        'title' => 'Benaturalle',
                        'subtitle' => 'IDENTIDADE VISUAL, PACKAGING',
                        'text' =>
                            'Benaturalle é uma empresa que oferece açaí e sorvetes com os mais diversos sabores criativos...',
                        'imageName' => 'post02.jpg',
                    ],
                    [
                        'title' => 'Monterrico',
                        'subtitle' => 'NAMING, ESTRATÉGIA, IDENTIDADE VISUAL',
                        'text' =>
                            'Como transformar uma marca vinculada à eventos em um símbolo de realização e estilo para aqueles que vivem a vida ao máximo?',
                        'imageName' => 'post03.png',
                    ],
                    [
                        'title' => 'Monterrico',
                        'subtitle' => 'NAMING, ESTRATÉGIA, IDENTIDADE VISUAL',
                        'text' =>
                            'San Sereno é uma cafeteria que nasce com a missão de transformar um simples espaço em meio ao caos urbano, em um lugar...',
                        'imageName' => 'post04.jpg',
                    ],
                ];
            @endphp
            @foreach ($photos as $photo)
                <x-common.box-case title="{{ $photo['title'] }}" subtitle="{{ $photo['subtitle'] }}"
                    text="{{ $photo['text'] }}" imageName="{{ $photo['imageName'] }}" boxStyle="box-case" />
            @endforeach
        </div>
    </section>
    <section class="section-black" style="margin-top:5rem">
        <div class="section-width"> 
            <h1>NOSSOS INSIGHTS</h1>
            <div class="container-box-blog justify-between flex">
                @php
                    $photos = [
                        [
                            'title' => 'Primeiro lugar na categoria de Branding no South America Design Awards',
                            'subtitle' => '',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
                            'imageName' => 'blog01.png',
                        ],
                        [
                            'title' => 'Novo projeto: Design de produto e embalagem para Mago Chocolates',
                            'subtitle' => '',
                            'text' =>
                                'Benaturalle é uma empresa que oferece açaí e sorvetes com os mais diversos sabores criativos...',
                            'imageName' => 'blog02.png',
                        ],
                        [
                            'title' => 'Bastidores do desenvolvimento do projeto: Kushã Shawe',
                            'subtitle' => '',
                            'text' =>
                                'Como transformar uma marca vinculada à eventos em um símbolo de realização e estilo para aqueles que vivem a vida ao máximo?',
                            'imageName' => 'blog03.png',
                        ],
                    ];
                @endphp
                @foreach ($photos as $photo)
                    <x-common.box-case title="{{ $photo['title'] }}" subtitle="{{ $photo['subtitle'] }}"
                        text="{{ $photo['text'] }}" imageName="{{ $photo['imageName'] }}" isCta boxStyle="box-blog" />
                @endforeach
            </div>
            <h1>Trabalhamos com quem entende que design não é um fim, mas um começo.</h1>
            <p class="bergenmono-regular text-uppercase">NOSSO PROCESSO:</p>
            <div>
                @php
                    $accordionData = [
                        [
                            'title' => '01. discovery',
                            'text' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque enim porttitor eros laoreet, sit amet feugiat erat porta.',
                        ],
                        [
                            'title' => '02.  DIAGNÓSTICO',
                            'text' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque enim porttitor eros laoreet, sit amet feugiat erat porta.',
                        ],
                        [
                            'title' => '03. design',
                            'text' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque enim porttitor eros laoreet, sit amet feugiat erat porta.',
                        ],
                        [
                            'title' => '04.  PROTÓTIPO',
                            'text' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque enim porttitor eros laoreet, sit amet feugiat erat porta.',
                        ],
                        [
                            'title' => '05. entrega',
                            'text' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque enim porttitor eros laoreet, sit amet feugiat erat porta.',
                        ],
                    ];
                @endphp
                @foreach ($accordionData as $key => $data)
                    <x-common.accordion 
                    title="{{ $data['title'] }}" 
                    text="{{ $data['text'] }}"
                    key="{{ $key + 1 }}" 
                    />
                @endforeach
            </div>
            <div>
              <p class="bergenmono-regular text-uppercase">Nossos serviços</p>
              <h1>Estratégia de Marca</h1> 
              <div class="brand-container">
                <div class="brand-box-container">
                    <div class="sidebar">
                      <ul>
                        <li data-target="naming">Naming</li>
                        <li data-target="diagnostico">Diagnóstico de Marca</li>
                        <li data-target="publico">Público de Interesse</li>
                        <li data-target="diferenciais">Diferenciais Estratégicos</li>
                        <li data-target="posicionamento">Posicionamento da Marca</li>
                      </ul>
                    </div>
                  
                    <div class="content">
                      <section id="naming" class="section">Imagem 1</section>
                      <section id="diagnostico" class="section">Imagem 2</section>
                      <section id="publico" class="section">Imagem 3</section>
                      <section id="diferenciais" class="section">Imagem 4</section>
                      <section id="posicionamento" class="section">Imagem 5</section>
                    </div>
                  </div>
                  
              </div>
            </div> 
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".section");
  const menuItems = document.querySelectorAll(".sidebar li");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          menuItems.forEach((item) => {
            item.classList.remove("active");
            if (item.dataset.target === entry.target.id) {
              item.classList.add("active");
            }
          });
        }
      });
    },
    { threshold: 0.6 }
  );

  sections.forEach((section) => observer.observe(section));
});

    </script>
@endsection
