<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-secondary btn-sm ms-auto']) }}>
    {{ $slot }}
</button>
