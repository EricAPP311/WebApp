<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary btn-sm ms-auto']) }}>
    {{ $slot }}
</button>
