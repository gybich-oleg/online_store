@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-center">Каталог товарів</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">
        @foreach($products as $product)
            <div class="bg-white rounded-lg shadow-md p-4 flex flex-col transition-transform transform hover:scale-105">
                <a href="{{ route('product.show', $product->slug) }}" class="flex-grow flex flex-col">
                    <div class="relative">
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-md mb-2">
                        @if($product->image)
                        @else
                            <img src="https://via.placeholder.com/150" alt="Placeholder" class="w-full h-48 object-cover rounded-md mb-2">
                        @endif
                        <div class="absolute inset-0 bg-black bg-opacity-0 transition-all duration-300 rounded-md hover:bg-opacity-50 flex items-center justify-center">
                            <h2 class="text-lg font-semibold text-white opacity-0 hover:opacity-100 transition-opacity">{{ $product->name }}</h2>
                        </div>
                    </div>
                    <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $product->name }}</h2>
                    <p class="text-gray-600 text-sm flex-grow">{{ $product->price }} грн.</p>
                </a>
                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-2">
                    @csrf
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full transition-colors duration-200">
                        Добавить в корзину
                    </button>
                </form>
            </div>
        @endforeach
    </div>
    <div class="mt-4 p-4">
        {{ $products->links('pagination::tailwind') }}
    </div>
@endsection
