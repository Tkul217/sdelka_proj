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

                        @if($errors->isNotEmpty())
                                <div class="alert alert-danger" role="alert">
                                    {{$errors}}
                                </div>
                        @endif

                        <form action="{{route('dashboard.apartments.update', $apartment)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Изменить заголовок</label>
                                <input class="form-control" type="text" id="title" name="title" value="{{$apartment->title}}">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Изменить описание</label>
                                <input class="form-control" type="text" id="description" name="description" value="{{$apartment->description}}">
                            </div>
                            <div class="mb-3">
                                <label for="salary" class="form-label">Изменить цену</label>
                                <input class="form-control" type="number" id="salary" name="salary" value="{{$apartment->salary}}">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="type">
                                    <option value=""></option>
                                    <option value="sale">Продается</option>
                                    <option value="arenda">В аренду</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Добавьте ссылку на квартиру</label>
                                <input class="form-control" type="text" id="link" name="link" value="{{$apartment->link}}">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Изменить фотографию</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
