@if (flash()->message)
    <div class="alert alert-{{ flash()->class ?? 'success' }}" role="alert">

        @if (flash()->class == 'warning' || flash()->class == 'danger')
            <i class="bi bi-exclamation-circle pe-2"></i>
        @elseif (!flash()->class || flash()->class == 'info' || flash()->class == 'success')
            <i class="bi bi-info-circle pe-2"></i>
        @endif

        {{ flash()->message }}
    </div>
@endif
