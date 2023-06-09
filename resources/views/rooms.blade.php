@extends('layout.base')

@section('title', 'Номери')

@section('content')
    @include('partials.header')
	<div class="page2">
		<img src = "{{asset('/storage/paws-page2.svg" class="left-paws')}}" alt="">
		<img src = "{{asset('/storage/paws-page2.svg" class="right-paws')}}" alt="">
		<div class="main-text-page2">
			<div class="heading">
				<img src="{{asset('/storage/heading-paw.svg')}}" alt="">
				<p>Номери та ціни</p>
				<img src="{{asset('/storage/heading-paw.svg')}}" alt="">
			</div>
			<p class="description">Індивідуально оформлені розкішні готельні номери та кошачий спа для ваших найкращих котячих друзів із щоденним  розчісуванням, іграми, ласкавими та збагачувальними заходами протягом дня.</p>
		</div>
		<div class="page2-rooms">
			<div class="page2-room1">
				<div class="page2-room1-img">
					<div class="page2-room1-description">
						<div class="room1-description-text">
							<p class="room1-description-heading">Стандарт</p>
							<p class="room1-description-base">Ідеальний для одного гостя</p>
							<p class="room1-description-price">250 грн./день</p>
							<div class="details-button">
								<span class="details-text">Детальніше</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="page2-room2">
				<div class="page2-room2-img">
					<div class="page2-room2-description">
						<div class="room2-description-text">
							<p class="room2-description-heading">Медіум</p>
							<p class="room2-description-base">Ідеальний для двох гостей</p>
							<p class="room2-description-price">500 грн./день</p>
							<div class="details-button">
								<span class="details-text">Детальніше</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="page2-room3">
				<div class="page2-room3-img">
					<div class="page2-room3-description">
						<div class="room3-description-text">
							<p class="room3-description-heading">Люкс</p>
							<p class="room3-description-base">Ідеальний для двох-чотирьох гостей</p>
							<p class="room3-description-price">700 грн./день</p>
                            <a href="{{ route("lux") }}">
							<div class="details-button">
								<span class="details-text">Детальніше</span>
							</div>
                            </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    @include('partials.footer')
