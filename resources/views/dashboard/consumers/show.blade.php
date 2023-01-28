@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('dashboard.consumers.destroy', $consumer)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Удалить</button>
                </form>
                <a href="{{route('dashboard.consumers.edit', $consumer)}}" class="btn btn-secondary">Редактировать</a>
                <div class="card">
                    <div class="card-header">{{ __('Агенты') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-img-top d-flex flex-wrap">
                        <div class="card-body">
                            <h4 class="card-title">{{$consumer->name}}</h4>
                            <p class="card-text">{{$consumer->phone}}</p>
                            <p class="card-text">{{$consumer->role}}</p>
                            @if($consumer->avatar)
                                <img src="{{\Illuminate\Support\Facades\Storage::url($consumer->avatar)}}">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
