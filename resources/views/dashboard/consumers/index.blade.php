@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Агенты') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>
                            <a href="{{route('dashboard.consumers.create')}}" class="btn btn-success mb-3">Добавить агента</a>
                        </div>
                        <div class="d-flex justify-content-xl-start flex-wrap">
                            @forelse($consumers as $consumer)
                                <div class="card m-3" style="width: 18rem;">
                                    @if($consumer->avatar)
                                        <img class="card-img-top" src="{{\Illuminate\Support\Facades\Storage::url($consumer->avatar)}}" alt="Card image cap">
                                    @endif
                                    <div class="card-body">
                                        <h4 class="card-title">Имя/Фамилия: {{$consumer->name}}</h4>
                                        <p class="card-text">Номер телефона: {{$consumer->phone}}</p>
                                        <p class="card-text">Должность: {{$consumer->role}}</p>
                                        <p class="card-text">Стаж работы: {{$consumer->work_experience}}</p>
                                        <a href="{{route('dashboard.consumers.show', $consumer)}}" class="btn btn-primary">Перейти к агенту</a>
                                    </div>
                                </div>
                            @empty
                                <h4 class="card-title">Агентов нет</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            @php
                \Illuminate\Pagination\Paginator::useBootstrapFive();
            @endphp
            {{ $consumers->links()}}
        </div>
    </div>
@endsection
