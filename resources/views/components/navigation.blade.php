@php
    $links = [
        [
            'label' => 'Home',
            'icon' => 'home',
            'href' => '/',
        ],
        [
            'label' => 'Dashboard',
            'icon' => 'dashboard',
            'href' => 'dashboard',
        ],
        [
            'label' => 'Learn',
            'icon' => 'learn',
            'href' => 'languages',
        ],
    ];

    if (Auth::check()) {
        array_push($links, [
            'label' => Auth::user()->name,
            'icon' => 'profile',
            'href' => 'javascript:void(0)',
        ]);
    } else {
        array_push($links, [
            'label' => 'Sign In',
            'icon' => 'profile',
            'href' => 'sign-in',
        ]);
    }
@endphp

<nav class="w-full flex bg-sky-800 items-center px-10 py-5">
    <ul class="flex flex-1 list-none space-x-5 justify-center">
        @foreach ($links as $link)
            <li class="flex">
                <x-nav-link href="{{ $link['href'] }}" :active="Request::is($link['href'])">
                    <x-icon :icon_name="$link['icon']"></x-icon>
                    <span class="hidden md:inline">{{ $link['label'] }}</span>
                </x-nav-link>
            </li>
        @endforeach
    </ul>
</nav>
