@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full px-4 py-2 border-[3px] border-[#E9DDCD] rounded-full  focus:border-[#E9DDCD] focus:outline-none']) !!}>
