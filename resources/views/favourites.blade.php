@extends('layout')
@section('main_content')
    <section class="container">
        <h1 style="text-align: center" id="third">Избранное</h1>
        <section class="p-4 text-center w-100">
            <!-- Gallery -->
            <div class="row">
                {{--                @if(!empty($posts))--}}
{{--                @foreach($posts as $post)--}}
{{--                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">--}}
{{--                        <a href="{{ route("post", $post->id) }}">--}}
{{--                            <img src="{{ $post->url }}" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
                {{--                @else--}}
                {{--                    <p>no results</p>--}}
                {{--                @endif--}}
            </div>
            <!-- Gallery -->
        </section>
@endsection
