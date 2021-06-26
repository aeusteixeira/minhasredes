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
                  <h5 class="align-items-center mt-2">Dr. Rodrigo Nahas</h5>
                  <p>
                    Seja bem-vindo(a) a maior comunidade de Macro e Micro Cirurgia Plástica Periodontal aplicada à Odontologia Interdisciplinar do Brasil.
                  </p>
                </div>
              </div>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action py-2">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2">
                    <i class="fab fa-facebook-square"></i> Facebook
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2">
                    <i class="fab fa-linkedin"></i> Linkedin
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2">
                    <i class="fas fa-link"></i> Blog
                </a>
              </div>
        </div>
    </div>
</main>
@endsection
