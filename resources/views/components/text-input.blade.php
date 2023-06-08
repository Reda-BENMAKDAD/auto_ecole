@props(['disabled' => false,
        'cursor' => "pointer"
])


<input style="cursor: {{ $cursor }}"  {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-mygold focus:ring-mygold rounded-md shadow-sm']) !!}>
