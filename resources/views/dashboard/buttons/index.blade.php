@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Кнопки') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>
                            <a href="{{route('dashboard.buttons.create')}}" class="btn btn-success mb-3">Добавить кнопку</a>
                        </div>
                        <div class="d-flex justify-content-xl-start flex-wrap">
                            @forelse($buttons as $button)
                                <div class="card m-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <h4 class="card-title">Название: {{$button->button_name}}</h4>
                                        <p class="card-text">Номер слайдера: {{$button->slider_id}}</p>
                                        <a href="{{route('dashboard.buttons.show', $button)}}" class="btn btn-primary">Перейти к кнопке</a>
                                    </div>
                                </div>
                            @empty
                                <h4 class="card-title">Кнопок нет</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            @php
                \Illuminate\Pagination\Paginator::useBootstrapFive();
            @endphp
            {{ $buttons->links()}}
        </div>
    </div>
@endsection
