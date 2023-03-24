@extends('layout')

@section('main_content')
    <div class="card shadow-sm">
        @if (isset($photo))
            <img class="card-img-top" src="{{ isset($photo->urls->regular) ? $photo->urls->regular : '' }}" alt="{{ isset($photo->alt_description) ? $photo->alt_description : '' }}">
            <div class="card-body">
                <p class="card-text">{{ isset($photo->description) ? $photo->description : '' }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">{{ isset($photo->user->name) ? $photo->user->name : '' }}</small>
                    <small class="text-muted">{{ isset($photo->created_at) ? $photo->created_at : '' }}</small>
                </div>
            </div>
        @else
            <p>Photo not found</p>
        @endif
    </div>
@endsection
