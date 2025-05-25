@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Панель керування') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Ви увійшли до особистого кабінету!') }}

                        @auth
                            @if (Auth::user()->roles->isNotEmpty())
                                <p>Ваші ролі:</p>
                                <ul>
                                    @foreach (Auth::user()->roles as $role)
                                        <li>{{ $role->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p>У вас немає призначених ролей.</p>
                            @endif
                        @endauth

                        @role('admin')
                        <p>Ви маєте права адміністратора.</p>
                        <a href="{{ route('admin.dashboard') }}">Перейти до панелі адміністратора</a>
                        @endrole

                        @role('product manager')
                        <p>Ви менеджер товарів.</p>
                        <a href="{{ route('product-manager.dashboard') }}">Перейти до панелі менеджера товарів</a>
                        @endrole

                        @role('order manager')
                        <p>Ви менеджер замовлень.</p>
                        <a href="{{ route('order-manager.dashboard') }}">Перейти до панелі менеджера замовлень</a>
                        @endrole

                        @role('customer')
                        <p>Ви клієнт.</p>
                        <a href="{{ route('customer.dashboard') }}">Перейти до панелі клієнта</a>
                        @endrole
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
