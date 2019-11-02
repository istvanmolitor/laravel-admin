<button type="submit" class="btn btn-primary">
    @if(isset($icon))
        <i class="fas fa-{{ $icon }}"></i>
    @endif
    {{ $label }}
</button>