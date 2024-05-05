<div>
    <div class="card mb-4">
        <div class="card-body">
            <h6>{{ $post->title }}</h6>
            <p class="fst-italic small">{{ $post->user->name }}</p>
            <p>{{ $post->body }}</p>
        </div>
    </div>
</div>
