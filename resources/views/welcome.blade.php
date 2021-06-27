@extends('layouts.app')

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
                <img src="https://uifaces.co/our-content/donated/gPZwCbdS.jpg" class="rounded-circle" alt="image" width="100px" height="100px">
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
                        <i class="{{ $network->icon }}"></i> {{ $network->title }}
                    </a>
                @endforeach
              </div>
        </div>
    </div>
</main>
@endsection
