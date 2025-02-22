@extends('layouts.main')

@section('title', 'Eros - Home')


@push('styles') 
<link rel="stylesheet" href="{{ asset("css/box-case.css") }}">
<link rel="stylesheet" href="{{ asset("css/box-blog.css") }}">
@endpush

@section('header')
     
@endsection

@section('content')
<section class="section-width">
    <h1>Damos forma ao invisível! Transformamos a essência única de cada marca em narrativas que geram resultados tangíveis no mercado!</h1>
    <x-common.link-underline class="my-3 flex" text="+Saiba mais sobre a Eros" link="#"></x-common.link-underline>
    <div class="container-box flex justify-between">
        @php 
        $photos =[
           [
            'title'=>'Kushã Shawe',
            'subtitle'=>'IDENTIDADE VISUAL, PACKAGING',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque enim porttitor eros laoreet, sit amet feugiat erat porta.',
            'imageName'=>'post01.jpg'
           ],
           [
            'title'=>'Benaturalle',
            'subtitle'=>'IDENTIDADE VISUAL, PACKAGING',
            'text'=>'Benaturalle é uma empresa que oferece açaí e sorvetes com os mais diversos sabores criativos...',
            'imageName'=>'post02.jpg'
            ],
           [
            'title'=>'Monterrico',
            'subtitle'=>'NAMING, ESTRATÉGIA, IDENTIDADE VISUAL',
            'text'=>'Como transformar uma marca vinculada à eventos em um símbolo de realização e estilo para aqueles que vivem a vida ao máximo?',
            'imageName'=>'post03.png'
            ],
           [
            'title'=>'Monterrico',
            'subtitle'=>'NAMING, ESTRATÉGIA, IDENTIDADE VISUAL',
            'text'=>'San Sereno é uma cafeteria que nasce com a missão de transformar um simples espaço em meio ao caos urbano, em um lugar...',
            'imageName'=>'post04.jpg'
            ],
        ];
        @endphp
        @foreach ($photos as $photo)
            <x-common.box-case 
            title="{{ $photo['title'] }}"
            subtitle="{{ $photo['subtitle'] }}" 
            text="{{ $photo['text'] }}"  
            imageName="{{ $photo['imageName'] }}" 
            boxStyle="box-case"
            />
        @endforeach
    </div>
</section> 
<section class="section-black">
    <div class="section-width">
        <h1>NOSSOS INSIGHTS</h1>
        <div class="container-box-blog justify-between flex">
            @php 
            $photos =[
               [
                'title'=>'Primeiro lugar na categoria de Branding no South America Design Awards',
                'subtitle'=>'',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
                'imageName'=>'blog01.png'
               ],
               [
                'title'=>'Novo projeto: Design de produto e embalagem para Mago Chocolates',
                'subtitle'=>'',
                'text'=>'Benaturalle é uma empresa que oferece açaí e sorvetes com os mais diversos sabores criativos...',
                'imageName'=>'blog02.png'
                ],
               [
                'title'=>'Bastidores do desenvolvimento do projeto: Kushã Shawe',
                'subtitle'=>'',
                'text'=>'Como transformar uma marca vinculada à eventos em um símbolo de realização e estilo para aqueles que vivem a vida ao máximo?',
                'imageName'=>'blog03.png'
                ], 
            ];
            @endphp
            @foreach ($photos as $photo)
                <x-common.box-case 
                title="{{ $photo['title'] }}" 
                subtitle="{{ $photo['subtitle'] }}" 
                text="{{ $photo['text'] }}"  
                imageName="{{ $photo['imageName'] }}"
                isCta
                boxStyle="box-blog"
                />
            @endforeach 
        </div>
        <h1>Trabalhamos com quem entende que design não é um fim, mas um começo.</h1>
    </div>
</section>
@endsection 