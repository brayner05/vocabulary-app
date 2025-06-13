@props(['active'])

<a {{ $attributes }}
    class="flex items-center md:space-x-3 text-white font-semibold rounded-md text-lg md:text-sm px-3 md:px-4 py-2 {{ $active ? 'bg-sky-900' : 'hover:bg-sky-700' }} duration-300 transition-all">{{ $slot }}</a>
