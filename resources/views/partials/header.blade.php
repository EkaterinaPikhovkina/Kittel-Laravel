
<header class="site-header" id="site-header">
    <a href="{{ route("home") }}">
    <div class="logo">
        <img src = "{{asset('/storage/logo.svg')}}">
        <span class="logo-text1">Kit<span class="logo-text2">tel</span></span>
        <span class="logo-text-description">П’ятизірковий готель для котів</span>
    </div>
    </a>
    <a href="{{ route("home") }}"><span class="menu1">Головна</span></a>
    <a href="{{ route("rooms") }}"><span class="menu2">Номери</span></a>
    <span class="menu3">Про нас</span>
    <span class="menu4">Контакти</span>
    <div class="header-mobile-background">
        <span class="header-mobile">+38 (050) 185-50-86</span>
    </div>
    <img class="mobile-menu" src="{{asset('/storage/menu.svg')}}">
</header>
