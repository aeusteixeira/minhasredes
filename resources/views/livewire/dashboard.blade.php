<div>

    <div class="media">
        <div class="text-center">
            @if ($image)
                <img src="{{ Storage::url($setting->image) }}" class="rounded-circle" alt="image"
            width="100px" height="100px" wire:model="image">
            @else
                <img src="https://i.pinimg.com/originals/89/64/99/8964998576cfac440b3a14df748fc670.png">
            @endif
        </div>
        <div class="form-group my-3 d-flex justify-content-center">
            <div class="input-group w-50">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="uploadFile" aria-label="Upload" wire:model="image">
                @error('image') <span class="error">{{ $message }}</span> @enderror
              </div>
        </div>
        <div class="media-body m-2">
            <h5 class="align-items-center mt-2">
                <input type="text" name="name" id="name" class="form-control text-center border-0" wire:model.lazy="name">
            </h5>
            <p>
                <textarea name="description" id="description" class="form-control border-0" wire:model.lazy="description"></textarea>
            </p>
        </div>
    </div>
</div>
