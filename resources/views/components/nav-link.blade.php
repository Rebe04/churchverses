@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-verses-yellow text-sm font-medium leading-5 text-verses-blue focus:outline-none focus:border-verses-yellow transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-verses-blue-h hover:text-verses-blue hover:border-verses-yellow-h focus:outline-none focus:text-gray-700 focus:border-verses-yellow transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
