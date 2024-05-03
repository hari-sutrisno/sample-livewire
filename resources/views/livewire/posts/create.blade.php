<div>
    <x-flash-message></x-flash-message>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">New Post</h5>
            <form wire:submit="save">
                <div class="mb-3">
                    <label for="body">Title</label>
                    <input type="text" wire:model="form.title" id="title" class="form-control">
                    @error('form.title')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="body">Body</label>
                    <textarea wire:model="form.body" id="body" rows="3" class="form-control"></textarea>
                    @error('form.body')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <button class="btn btn-outline-warning fw-bold">Save</button>
            </form>
        </div>
    </div>
</div>
