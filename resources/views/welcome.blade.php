@extends('layouts.app')

@push('seo')
<!-- Primary Meta Tags -->
<title>{{ $setting->name }} - {{ $setting->description }} - Minhas Redes</title>
<meta name="title" content="{{ $setting->name }}">
<meta name="description" content="{{ $setting->description }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ route('index') }}">
<meta property="og:title" content="{{ $setting->name }}">
<meta property="og:description" content="{{ $setting->description }}">
<meta property="og:image" content="{{ Storage::url($setting->image) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ route('index') }}">
<meta property="twitter:title" content="{{ $setting->name }}">
<meta property="twitter:description" content="{{ $setting->description }}">
<meta property="twitter:image" content="{{ Storage::url($setting->image) }}">
@endpush

@push('styles')
    <style>
        .card{
            border-radius: 1.5rem;
        }

        body{
            background-color: rgb(31, 22, 63);
        }
    </style>
@endpush


@section('content')
<main role="main" class="container mt-5">
    <div class="card shadow p-3">
        <div class="card-body">
            <div class="media text-center">
                <img src="{{ Storage::url($setting->image) }}" class="rounded-circle" alt="image" width="100px" height="100px">
                <div class="media-body m-2">
                  <h5 class="align-items-center mt-2">
                      {{ $setting->name }}
                  </h5>
                  <p>
                    {{ $setting->description }}
                  </p>
                </div>
              </div>
              <div class="list-group">
                @foreach ($networks as $network)
                    <a href="{{ $network->action_type.$network->action }}" class="list-group-item list-group-item-action py-2" target="_blank">
                        {!! $network->icon !!} {{ $network->title }}
                    </a>
                @endforeach
              </div>
        </div>
    </div>
</main>
@endsection
