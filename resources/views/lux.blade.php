@extends('layout.base')

@section('title', 'Номер "Люкс"')

@section('content')
    @include('partials.header')
	<div class="page3">
		<img src = "{{asset('/storage/paws-page3.svg')}}" class="left-paws" alt="">
		<img src = "{{asset('/storage/paws-page3.svg')}}" class="right-paws" alt="">
		<div class="main-text-page3">
			<div class="heading">
				<img src="{{asset('/storage/heading-paw.svg')}}" alt="">
				<p>Номер “Люкс”</p>
				<img src="{{asset('/storage/heading-paw.svg')}}" alt="">
			</div>
			<p class="description">Якщо Ви хочете, щоб проживання вашого вихованця в готелі було на вищому рівні, тоді Вам потрібен Люкс!</p>
		</div>
		<div class="lux">
			<p class="lux-advantages">Що входить в пакет “Люкс”:<br>
				- персональний догляд,<br>
				- лоток-туалет,<br>
				- мисочки Hagen,<br>
				- іграшки Hagen,<br>
				- Ferplast,<br>
				- бутильована вода,<br>
				- відеоспостереження,<br>
				- затишні будиночки-печери.</p>
			<div class="page3-button">
				<p class="page3-button-text">Забронювати</p>
			</div>
			<img src="{{asset('/storage/page3-cat.svg')}}" class="cat" alt="">
			<img src="{{asset('/storage/lux.jpg')}}" class="lux-img" alt="">
		</div>
	</div>
    @include('partials.footer')
