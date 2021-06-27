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
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush


@section('content')
<main role="main" class="container my-5">
    <div class="card shadow p-3">
        <div class="card-body">
            @livewire('dashboard')
            @livewire('networks')
        </div>
    </div>
</main>
@endsection
