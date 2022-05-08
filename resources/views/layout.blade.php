
<?php
$url = $_SERVER['REQUEST_URI'];
$url = substr($url, -3);
?>
@if($url === '/ru')
    @include('ru.includes.header')
@else
    @include('includes.header')
@endif
@include('includes.message')


@yield('content')



@if($url === '/ru')
    @include('ru.includes.footer')
@else
    @include('includes.footer')
@endif


