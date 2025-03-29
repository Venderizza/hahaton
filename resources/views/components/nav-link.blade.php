@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center p-2 text-black rounded-lg bg-[#FAF3EC] transition duration-150 ease-in-out'
            : 'flex items-center p-2 text-black rounded-lg hover:bg-gray-100 bg-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
