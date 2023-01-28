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

                        <form action="{{route('dashboard.consumers.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="name" class="form-label">Добавьте Имя/Фамилию</label>
                                <input class="form-control" type="text" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Добавьте номер</label>
                                <input class="form-control" type="number" id="phone" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Добавьте должность</label>
                                <input class="form-control" type="text" id="role" name="role">
                            </div>
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Добавьте фотографию</label>
                                <input class="form-control" type="file" id="avatar" name="avatar">
                            </div>
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
