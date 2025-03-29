<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-[#383435] text-white py-1 px-10 rounded-full focus:outline-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
