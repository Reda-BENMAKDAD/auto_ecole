@props(['disabled' => false,
        'cursor' => "pointer"
])

<input style="cursor: {{ $cursor }}"  {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-mygold-500 focus:ring-mygold-500 rounded-md shadow-sm']) !!}>
