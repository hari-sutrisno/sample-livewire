<div class="row">
    @foreach ($posts as $post)
        <livewire:posts.item :post="$post" wire:key="{{ $post->id }}" />
    @endforeach
</div>
