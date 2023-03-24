@extends('layout')
@section('main_content')
    <div id="first">
        <div class="col-sm-5  container container-lg">
            <form action="#" method="get" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск" name="search">
                <button class="btn btn-dark" type="submit">Поиск</button>
            </form>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    {{--Контент --}}
    <section class="container">
        <section class="p-4 text-center w-100">
            <!-- Gallery -->
            <div class="row">
                @if ($photos->isNotEmpty())
                    <div class="row">
                        @php $i = 0 @endphp
                        @foreach($photos->chunk(3) as $chunk)
                            @foreach ($chunk as $photo)
                                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                    <a href="{{ route('show', ['id' => $photo['id']]) }}">
                                        <div class="card shadow-sm">
                                            <img class="card-img-top" src="{{ $photo['urls']['regular'] }}" alt="{{ $photo['alt_description'] }}">
                                            <div class="card-body">
                                                <p class="card-text">{{ $photo['description'] }}</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="text-muted">{{ $photo['user']['name'] }}</small>
                                                    <small class="text-muted">{{ $photo['created_at'] }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @php $i++ @endphp
                            @endforeach
                        @endforeach
                    </div>
                @else
                    <p>No photos found</p>
                @endif
            </div>
            <!-- Gallery -->
        </section>
@endsection
