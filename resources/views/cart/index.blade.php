@extends('layouts.app')

@section('content')
    <h1>Корзина</h1>
    <div class="cart-items">
        @foreach($cart as $id => $item)
            <div class="cart-item">
                <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}">
                <h3>{{ $item['name'] }}</h3>
                <p>Цена: {{ $item['price'] }} руб.</p>
                <p>Количество: {{ $item['quantity'] }}</p>
                <a href="{{ route('cart.remove', $id) }}">Удалить</a>
            </div>
        @endforeach
    </div>
@endsection
