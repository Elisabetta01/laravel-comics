<?php
$menu = [
     [
          'url'=> '/',
          'nome'=> 'characters',
          'current'=> false,
     ],
     [
          'url'=> '/',
          'nome'=> 'comics',
          'current'=> true
,    ],
     [
          'url'=> '/',
          'nome'=> 'movies',
          'current'=> false,
     ],
     [
          'url'=> '/',
          'nome'=> 'tv',
          'current'=> false
  ,   ],
     [
          'url'=> '/',
          'nome'=> 'games',
          'current'=> false,
     ],
     [
          'url'=> '/',
          'nome'=> 'collectibles',
          'current'=> false,
     ],
     [
          'url'=> '/',
          'nome'=> 'videos',
          'current'=> false,
     ],
     [
          'url'=> '/',
          'nome'=> 'fans',
          'current'=> false,
     ],
     [
          'url'=> '/',
          'nome'=> 'news',
          'current'=> false,
     ],
     [
          'url'=> '/',
          'nome'=> 'shop',
          'current'=> false,
     ],

]
?>


<header>
     <nav>
          <img src=" {{ Vite::asset('resources/images/dc-logo.png') }} " alt="logo">

          <ul>
               @foreach($menu as $element)
               <li>
                    <a href="{{ $element['url'] }}">{{ $element['nome'] }}</a>
               </li>
               @endforeach
          </ul>

     </nav>
</header>

