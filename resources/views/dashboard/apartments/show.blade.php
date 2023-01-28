@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('dashboard.apartments.destroy', $apartment)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Удалить</button>
                </form>
                <a href="{{route('dashboard.apartments.edit', $apartment)}}" class="btn btn-secondary">Редактировать</a>
                <div class="card">
                    <div class="card-header">{{ __('Квартира') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-img-top d-flex flex-wrap">
                        <div class="card-body">
                            <h4 class="card-title">{{$apartment->title}}</h4>
                            <p class="card-text">{{$apartment->description}}</p>
                            <p class="card-text">{{$apartment->salary}}</p>
                            @if($apartment->image)
                                <img src="{{\Illuminate\Support\Facades\Storage::url($apartment->image)}}">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
