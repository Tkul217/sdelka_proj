@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form action="{{route('dashboard.partners.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="image" class="form-label">Добавьте лого</label>
                                    <input class="form-control" type="file" id="image" name="logo">
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" name="role">
                                        <option>Выберите партнера</option>
                                        <option value="Государственные органы">Государственные органы</option>
                                        <option value="Застройщики">Застройщики</option>
                                        <option value="Банки">Банки</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Создать</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
