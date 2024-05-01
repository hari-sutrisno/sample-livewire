<div class="card">
    <div class="card-body">
        <h5 class="card-title">New Post</h5>
        <form wire:submit="save">
            <div class="mb-3">
                <label for="body">Title</label>
                <input type="text" wire:model="title" id="title" class="form-control">
                @error('title')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body">Body</label>
                <textarea wire:model="body" id="body" rows="3" class="form-control"></textarea>
                @error('body')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-success">Save</button>
        </form>
    </div>
</div>
