@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-5 pt-1 leading-5 text-gray-900 focus:outline-none transition duration-150 ease-in-out text-[#25E59B]'
            : 'inline-flex items-center px-5 pt-1 leading-5 text-white  hover:text-gray-70 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out hover:text-[#25E59B]';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
