<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-sm text-white bg-red-600 px-4 py-2.5 hover:bg-red-500 tracking-widest rounded-md inline-flex items-center bg-red-600 border border-transparent font-bold  uppercase active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

