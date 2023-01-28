@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('dashboard.partners.destroy', $partner)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Удалить</button>
                </form>
                <div class="card">
                    <div class="card-header">{{ __('Партнер') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-img-top d-flex flex-wrap">
                        <div class="card-body">
                            <h4 class="card-title">Тип партнера: {{$partner->role}}</h4>
                            <img src="{{\Illuminate\Support\Facades\Storage::url($partner->logo)}}">
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
