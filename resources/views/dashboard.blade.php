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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    @livewireStyles
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
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
