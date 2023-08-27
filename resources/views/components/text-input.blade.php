@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'mt-1 w-full border-t-0 border-x-0 border-b-[1px] border-nblue  shadow-sm focus:outline-none placeholder:text-nblue focus:ring-none',
]) !!}>
