@extends('layout.base')

@section('title', 'Kittel')

@section('content')
    <h1>Замовити дзвінок</h1>
    @if($errors->any)
        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/form/submit" method="post">
        @csrf
        <div class="form-container">
            <label for="name">Введіть своє ім'я</label>
            <input type="text" name="name" placeholder="Ваше ім'я" id="name" class="form-field">
        </div>
        <div class="form-container">
            <label for="surname">Введіть своє прізвище</label>
            <input type="text" name="surname" placeholder="Ваше прізвище" id="surname" class="form-field">
        </div>
        <div class="form-container">
            <label for="phone_number">Введіть свій номер телефону</label>
            <input type="text" name="phone_number" placeholder="Ваш номер телефону" id="phone_number" class="form-field">
        </div>
        <button type="submit" class="button-submit">Замовити</button>
    </form>
