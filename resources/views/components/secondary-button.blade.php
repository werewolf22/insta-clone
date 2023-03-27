<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-secondary px-4 py-2 fw-bold text-uppercase shadow-sm']) }}>
    {{ $slot }}
</button>
