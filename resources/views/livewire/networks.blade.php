<div>
    <ol class="list-group">
        @forelse ($networks as $network)
        <li class="list-group-item d-flex justify-content-between align-items-start py-2">
            <div class="ms-2 me-auto">
              <div class="">
                {!! $network->icon !!} {{ $network->title }}
              </div>
            </div>
            <button class="btn btn-danger badge bg-danger rounded-pill" wire:click="delete({{ $network->id }})">
              <i class="fas fa-trash-alt"></i>
            </button>
          </li>
        @empty
        <p class="text-center text-secondary">Nenhum link cadastrado</p>
        @endforelse
      </ol>
    <hr>
    <form class="row g-3" wire:submit="submit">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Ícone</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Conteúdo</th>
                        <th scope="col">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <div class="form-group">
                                <select class="form-select" wire:model="icon">
                                    <option>Selecione um ícone</option>
                                    <option value='<i class="fab fa-facebook-square"></i>'>Facebook</option>
                                    <option value='<i class="fab fa-instagram"></i>'>Instagram</option>
                                    <option value='<i class="fab fa-linkedin"></i>'>Linkedin</option>
                                    <option value='<i class="fab fa-tiktok"></i>'>TikTok</option>
                                    <option value='<i class="fab fa-spotify"></i>'>Spotify</option>
                                    <option value='<i class="fab fa-whatsapp"></i>'>WhatsApp</option>
                                    <option value='<i class="fas fa-at"></i>'>E-mail</option>
                                    <option value='<i class="fas fa-link"></i>'>Link</option>
                                </select>
                            </div>
                        </th>
                        <td>
                            <input maxlength="244" type="text" class="form-control" placeholder="Siga-me no Facebook" wire:model="title">
                        </td>
                        <td>
                            <input maxlength="244" type="text" class="form-control" placeholder="https://facebook.com/adobeacrobat" wire:model="action">
                        </td>
                        <td>
                            <select class="form-select" wire:model="action_type">
                                <option value="''" selected>Link</option>
                                <option value="mailto:">E-mail</option>
                                <option value="tel:">Telefone</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Cadastrar</button>
        </div>
    </form>
    @push('scripts')

    @endpush
</div>
