@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }}  {!! $attributes->merge(['class' =>'mt-1 w-full bg-white text-gray-800 border-t-0 border-x-0 border-b-[1px] border-nblue shadow-sm capitalize',]) !!}>
    {{ $slot }}
</select>
