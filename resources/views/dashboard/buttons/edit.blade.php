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

                        @if($errors->isNotEmpty())
                                <div class="alert alert-danger" role="alert">
                                    {{$errors}}
                                </div>
                        @endif

                            <form action="{{route('dashboard.buttons.update', $button)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Изменить название</label>
                                    <input value="{{$button->button_name}}" class="form-control" type="text" id="name" name="button_name">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Изменить слайдера</label>
                                    <input value="{{$button->slider_id}}" class="form-control" type="number" id="phone" name="slider_id">
                                </div>
                                <button type="submit" class="btn btn-primary">Изменить</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
