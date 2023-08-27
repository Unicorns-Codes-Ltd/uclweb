@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-udark text-sm font-medium leading-5 text-udark focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-uorange hover:text-gray-300 hover:border-gray-300 focus:outline-none focus:text-gray-300 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
