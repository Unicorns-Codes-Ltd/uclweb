<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-nblue rounded border border-transparent font-semibold text-base text-white uppercase tracking-widest hover:bg-uorange focus:bg-uorange active:bg-uorange focus:outline-none focus:ring-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
