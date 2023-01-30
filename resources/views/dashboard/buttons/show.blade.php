@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('dashboard.buttons.destroy', $button)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Удалить</button>
                </form>
                <a href="{{route('dashboard.buttons.edit', $button)}}" class="btn btn-secondary">Редактировать</a>
                <div class="card">
                    <div class="card-header">{{ __('Кнопки') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-img-top d-flex flex-wrap">
                        <div class="card-body">
                            <h4 class="card-title">Название кнопки: {{$button->button_name}}</h4>
                            <p class="card-text">Номер слайдера: {{$button->slider_id}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
