<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-white ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
