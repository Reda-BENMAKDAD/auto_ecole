@props(['disabled' => false,
        'cursor' => "pointer"])

<button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['type' => 'submit', 'class' => 'ursor-not-allowed inline-flex items-center bg-mygold px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:hover:brightness-110 focus:hover:brightness-110 active:hover:brightness-110 focus:outline-none focus:ring-2 focus:ring-mygold-800 focus:ring-offset-2 transition ease-in-out duration-150']) }} style="cursor: {{ $cursor  }}">
    {{ $slot }}
</button>
