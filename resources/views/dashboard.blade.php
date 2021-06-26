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

@push('script')
    @livewireScripts
@endpush


@section('content')
<main role="main" class="container mt-5">
    @livewire('dashboard')
</main>
@endsection
