@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reels') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>
                            <a href="{{route('dashboard.instagramReels.create')}}" class="btn btn-success mb-3">Добавить Instagram Reels</a>
                        </div>
                        <div class="d-flex justify-content-xl-start flex-wrap">
                            @forelse($instagramReels as $instagramReel)
                                <div class="card m-5" style="width: 18rem;">
                                    {!! $instagramReel->instagram_reels !!}
                                    <form action="{{route('dashboard.instagramReels.destroy', $instagramReel)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Удалить</button>
                                    </form>
                                </div>
                            @empty
                                <h4 class="card-title">Instagram Reels нет</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            @php
                \Illuminate\Pagination\Paginator::useBootstrapFive();
            @endphp
            {{ $instagramReels->links()}}
        </div>
    </div>
@endsection
