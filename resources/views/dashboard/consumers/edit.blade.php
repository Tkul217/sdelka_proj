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

                        @if($errors->isNotEmpty())
                            <div class="alert alert-danger" role="alert">
                                {{$errors}}
                            </div>
                        @endif

                        <form action="{{route('dashboard.consumers.update', $consumer)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Изменить Имя/Фамилию</label>
                                <input value="{{$consumer->name}}" class="form-control" type="text" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Изменить номер</label>
                                <input value="{{$consumer->phone}}" class="form-control" type="number" id="phone" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Изменить должность</label>
                                <input value="{{$consumer->role}}" class="form-control" type="text" id="role" name="role">
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Изменить стаж работы</label>
                                <input value="{{$consumer->work_experience}}" class="form-control" type="text" id="role" name="role">
                            </div>
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Изменить фотографию</label>
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
