@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Квартиры') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>
                            <a href="{{route('dashboard.apartments.create')}}" class="btn btn-success mb-3">Добавить квартиру</a>
                        </div>
                        <div class="d-flex justify-content-xl-start flex-wrap">
                            @forelse($apartments as $apartment)
                                <div class="card m-3" style="width: 18rem;">
                                    @if($apartment->image)
                                        <img class="card-img-top" src="{{\Illuminate\Support\Facades\Storage::url($apartment->image)}}" alt="Card image cap">
                                    @endif
                                    <div class="card-body">
                                        <h4 class="card-title">{{$apartment->title}}</h4>
                                        <p class="card-text">{{$apartment->description}}</p>
                                        <p class="card-text">{{$apartment->salary}}</p>
                                        <a href="{{route('dashboard.apartments.show', $apartment)}}" class="btn btn-primary">Перейти к квартире</a>
                                    </div>
                                </div>
                            @empty
                                <h4 class="card-title">Квартир нет</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            @php
                \Illuminate\Pagination\Paginator::useBootstrapFive();
            @endphp
            {{ $apartments->links()}}
        </div>
    </div>
@endsection
