@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('dashboard.blogs.destroy', $blog)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Удалить</button>
                </form>
                <a href="{{route('dashboard.blogs.edit', $blog)}}" class="btn btn-secondary">Редактировать</a>
                <div class="card">
                    <div class="card-header">{{ __('Блоги') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-img-top d-flex flex-wrap">
                        <div class="card-body">
                            <h4 class="card-title">Заголовок: {{$blog->title}}</h4>
                            <p class="card-text">Описание: {{$blog->description}}</p>
                            @if($blog->image)
                                <img src="{{\Illuminate\Support\Facades\Storage::url($blog->image)}}">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
