<div>

    <div class="media">
        <div class="text-center">
            <img src="https://uifaces.co/our-content/donated/gPZwCbdS.jpg" class="rounded-circle" alt="image"
                width="100px" height="100px">
        </div>
        <div class="form-group my-3 d-flex justify-content-center">
            <input type="file" name="photo" id="photo" class="form-control w-50">
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
