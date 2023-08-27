@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'mt-1 w-full border-t-0 border-x-0 border-b-[1px] border-nblue text-base text-nblue shadow-sm focus:outline-none rounded-none placeholder:text-nblue',
]) !!}>{{ $slot }}</textarea>
