@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Панель клієнта') }}</div>

                    <div class="card-body">
                        {{ __('Вітаємо у вашому особистому кабінеті!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
