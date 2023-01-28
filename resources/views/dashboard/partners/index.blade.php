@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Партнеры') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>
                            <a href="{{route('dashboard.partners.create')}}" class="btn btn-success mb-3">Добавить партнера</a>
                        </div>
                            <div class="d-flex justify-content-xl-start flex-wrap">
                                @forelse($partners as $partner)
                                    <div class="card m-3" style="width: 18rem;">
                                        <img class="card-img-top" src="{{\Illuminate\Support\Facades\Storage::url($partner->logo)}}" alt="Card image cap">
                                        <div class="card-body">
                                            <a href="{{route('dashboard.partners.show', $partner)}}" class="btn btn-primary">Перейти к партнеру</a>
                                        </div>
                                    </div>
                                @empty
                                    <h4 class="card-title">Партнеров нет</h4>
                                @endforelse
                            </div>
                    </div>
                </div>
            </div>
            @php
                \Illuminate\Pagination\Paginator::useBootstrapFive();
            @endphp
            {{ $partners->links()}}
        </div>
    </div>
@endsection
