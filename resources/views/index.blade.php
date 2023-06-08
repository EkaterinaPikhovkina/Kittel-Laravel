@extends('layout.base')

@section('title', 'Kittel')

@section('content')
    @include('partials.header')
	<div class="main-page">
		<img src = "{{asset('/storage/paws-landing.png')}}" class="left-paws">
		<img src = "{{asset('/storage/paws-landing.png')}}" class="right-paws">
		<div class="landing-introduction">
			<span class="headline">Приносьте Вашу кицьку вже сьогодні, <br>а ми з любов’ю доглянемо її</span>
			<span class="description-landing">Не хочете залишати кицю в брудній клітці? Телефонуйте прямо зараз і Ваш кіт буде жити в 5-зірковому номері з обслуговуванням.</span>
			<div class="request-call-button">
				<span class="request-call-text">Замовити дзвінок</span>
			</div>
		</div>
		<img src = "{{asset('/storage/cat-landing.png')}}" class="image-landing">
        <img src = "{{asset('/storage/cat-landing-mobile.png')}}" class="image-landing-mobile">
	</div>
	<div class="main-page2">
		<div class="reviews-container-background">
			<div class="reviews-container">
				<div class="quotes"></div>
				<div class="review">
					<p class="heading">НАСТІЛЬКИ ВРАЖЕНА<br>ЧУДОВИМ СЕРВІСОМ ТА ЧИСТОТОЮ</p>
					<p class="review-text">Я вперше скористалася послугами Kittel і була настільки вражена чудовим сервісом і чистотою номерів, що рекомендувала би його будь-якому власнику кота. Семен (мій котик) любив своє маленьке ліжко, і коли я забирала його, він був спокійний, виглядав дуже чистим і охайним. Тетяна, очевидно, обожнює котів і змусила його відчувати себе на всі сто під час його перебування в готелі. Спасибі Джилл і великий поцілунок від Семена!</p>
					<p class="author">Катерина Рибакова</p>
				</div>
			</div>
		</div>
	</div>
	<div class="main-page3">
		<span class="headline2">Обирайте будь-який комфортний <br>номер для вашого улюбленця</span>
		<div class="room1">
			<img src="{{asset('/storage/standart.jpg')}}">
			<div class="description">
				<p class="big-bold">Стандарт</p>
				<p class="normal">- для одного гостя<br>
				- площа 4 кв.м<br>
				- прибирання 1 раз/день</p>
				<p class="bold">250 грн./день</p>
			</div>
			<div class="booking-button">
				<span class="booking-text">Забронювати</span>
			</div>
		</div>
		<div class="room2">
			<img src="{{asset('/storage/medium.jpg')}}">
			<div class="description">
				<p class="big-bold">Медіум</p>
				<p class="normal">- для двох гостей<br>
				- площа 16 кв.м<br>
				- прибирання 2 рази/день</p>
				<p class="bold">500 грн./день</p>
			</div>
			<div class="booking-button">
				<span class="booking-text">Забронювати</span>
			</div>
		</div>
		<div class="room3">
			<img src="{{asset('/storage/lux.jpg')}}">
			<div class="description">
				<p class="big-bold">Люкс</p>
				<p class="normal">- для двох-чотирьох гостей<br>
				- площа 36 кв.м<br>
				- прибирання 3 рази/день</p>
				<p class="bold">700 грн./день</p>
			</div>
			<div class="booking-button">
				<span class="booking-text">Забронювати</span>
			</div>
		</div>
	</div>
	<div class="main-page4">
		<span class="headline3">Чому в Kittel Ваш кіт
		буде почувати себе як удома?</span>
		<div class="advantage1">
			<img src="{{asset('/storage/door-icon.svg')}}">
			<p class="advantage-heading">НОМЕРИ ЗІ ЗРУЧНОСТЯМИ</p>
			<p class="advantage-description">Номери з різноманітними меблями для котів.</p>
		</div>
		<div class="advantage2">
			<img src="{{asset('/storage/broom-icon.svg')}}">
			<p class="advantage-heading">РЕТЕЛЬНЕ ПРИБИРАННЯ</p>
			<p class="advantage-description">Прибирання та кварцевання після кожного пухнастика.</p>
		</div>
		<div class="advantage3">
			<img src="{{asset('/storage/patch-icon.svg')}}">
			<p class="advantage-heading">ПРОФЕСІЙНИЙ ВЕТЕРИНАР</p>
			<p class="advantage-description">Кожен робітник за сумісництвом ветеринар.</p>
		</div>
		<div class="advantage4">
			<img src="{{asset('/storage/grass-icon.svg')}}">
			<p class="advantage-heading">СВІЙ МІНІ-ПАРК</p>
			<p class="advantage-description">Кожен кіт має окрему “зелену” зону для відпочинку на свіжому повітрі.</p>
		</div>
		<div class="advantage5">
			<img src="{{asset('/storage/bird-icon.svg')}}">
			<p class="advantage-heading">БЕЗЛІЧ РОЗВАГ</p>
			<p class="advantage-description">В готелі є атракціони, а також клітки з пташками, за якими цікаво спостерігати.</p>
		</div>
		<div class="advantage6">
			<img src="{{asset('/storage/camera-icon.svg')}}">
			<p class="advantage-heading">ТРАНСЛЯЦІЯ 24/7</p>
			<p class="advantage-description">Ви будете мати змогу бачити свого улюбленця на стрімі в будь-який час доби.</p>
		</div>
	</div>
	<div class="main-page5">
		<p class="headline4">Замовляйте дзвінок або телефонуйте нам самостійно</p>
		<p class="headline4-description">Оператор на лінії працює цілодобово.</p>
		<div class="buttons-container">
			<div class="page5-mobile-button">
				<span class="mobile-number">+38 (050) 185-50-86</span>
			</div>
            <img src="{{asset('/storage/button-cat.png')}}">
			<div class="page5-request-call">
				<span class="request-call-text">Замовити дзвінок</span>
			</div>
		</div>
	</div>
    @include('partials.footer')
