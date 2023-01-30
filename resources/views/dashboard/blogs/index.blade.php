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

                        <div>
                            <a href="{{route('dashboard.blogs.create')}}" class="btn btn-success mb-3">Добавить блог</a>
                        </div>
                        <div class="d-flex justify-content-xl-start flex-wrap">
                            @forelse($blogs as $blog)
                                <div class="card m-3" style="width: 18rem;">
                                    @if($blog->image)
                                        <img class="card-img-top" src="{{\Illuminate\Support\Facades\Storage::url($blog->image)}}" alt="Card image cap">
                                    @endif
                                    <div class="card-body">
                                        <h4 class="card-title">Заголовок: {{$blog->title}}</h4>
                                        <p class="card-text">Описание: {{$blog->description}}</p>
                                        <a href="{{route('dashboard.blogs.show', $blog)}}" class="btn btn-primary">Перейти к Блогу</a>
                                    </div>
                                </div>
                            @empty
                                <h4 class="card-title">Блогов нет</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            @php
                \Illuminate\Pagination\Paginator::useBootstrapFive();
            @endphp
            {{ $blogs->links()}}
        </div>
    </div>
@endsection
