<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger btn-sm ms-auto']) }}>
    {{ $slot }}
</button>
