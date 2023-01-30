@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Блоги') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{route('dashboard.blogs.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="name" class="form-label">Добавьте Заголовок</label>
                                <input class="form-control" type="text" id="name" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Добавьте Описание</label>
                                <input class="form-control" type="text" id="phone" name="description">
                            </div>
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Добавьте фотографию</label>
                                <input class="form-control" type="file" id="avatar" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
