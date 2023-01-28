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

                        <form action="{{route('dashboard.apartments.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="title" class="form-label">Добавьте заголовок</label>
                                <input class="form-control" type="text" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Добавьте описание</label>
                                <input class="form-control" type="text" id="description" name="description">
                            </div>
                            <div class="mb-3">
                                <label for="salary" class="form-label">Добавьте цену</label>
                                <input class="form-control" type="number" id="salary" name="salary">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="type">
                                    <option selected>Выбрать тип квартиры</option>
                                    <option value="sale">Продается</option>
                                    <option value="arenda">В аренду</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Добавьте ссылку на квартиру</label>
                                <input class="form-control" type="text" id="link" name="link">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Добавьте фотографию</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
