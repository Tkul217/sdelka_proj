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

                        @if($errors->isNotEmpty())
                                <div class="alert alert-danger" role="alert">
                                    {{$errors}}
                                </div>
                        @endif

                            <form action="{{route('dashboard.blogs.update', $blog)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Изменить заголовок</label>
                                    <input value="{{$blog->title}}" class="form-control" type="text" id="name" name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Изменить описание</label>
                                    <input value="{{$blog->description}}" class="form-control" type="text" id="phone" name="description">
                                </div>
                                <div class="mb-3">
                                    <label for="avatar" class="form-label">Изменить фотографию</label>
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
