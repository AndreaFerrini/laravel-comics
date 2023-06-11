<?php

$menuLinks= [
    [
        "nome"=>"Characters",
        "url"=> "https=>//www.dc.com/characters",
        "current"=> false
    ],
    [
        "nome"=>"Comics",
        "url"=> "https=>//www.dc.com/comics",
        "current"=> true
    ],
    [
        "nome"=>"Movies",
        "url"=> "https=>//www.dc.com/movies",
        "current"=> false
    ],
    [
        "nome"=>"TV",
        "url"=> "https=>//www.dc.com/tv",
        "current"=> false
    ],
    [
        "nome"=>"Games",
        "url"=> "https=>//www.dc.com/games",
        "current"=> false
    ],
    [
        "nome"=>"Collectibles",
        "url"=> "https=>//www.dcuniverseinfinite.com/coming-soon/",
        "current"=> false
    ],
    [
        "nome"=>"Videos",
        "url"=> "https=>//www.dc.com/videos",
        "current"=> false
    ],
    [
        "nome"=>"Fan",
        "url"=> "https=>//www.dc.com/",
        "current"=> false
    ],
    [
        "nome"=>"News",
        "url"=> "https=>//www.dc.com/news",
        "current"=> false
    ],
    [
        "nome"=>"Shop",
        "url"=> "https=>//shop.dc.com/coming-soon/",
        "current"=> false
    ]
]


?>

<header>
    <nav>
        <div class="">
            <img src=" {{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo dc" class="mt-3 mb-3">
            <ul class="d-flex justify-content-around align-items-center">
                @foreach( $menuLinks as $elem)
                <li>
                    <a href="{{ $elem['url'] }}">{{ $elem["nome"] }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>