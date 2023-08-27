@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-lg md:2xl lg:text-xl text-dgreen font-medium hover:text-dgreen transition duration-150 ease-in-out'
            : 'text-lg md:2xl lg:text-xl text-nblue font-medium hover:text-dgreen transition duration-150 ease-in-out';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
