<x-layout title="Languages">
    <div class="w-full p-15 flex flex-col items-center">
        <div class="w-full lg:w-1/2 flex flex-col items-center space-y-5">
            <div class="w-full flex ml-4">
                <h2 class="text-white text-2xl font-bold">Languages</h2>
            </div>
            <ul class="w-full space-y-4">
                <x-language-card :progress="65"></x-language-card>
                <x-language-card :progress="5"></x-language-card>
                <x-language-card :progress="32"></x-language-card>
                @foreach ($languages as $language)
                    <li>
                        <a href="#" class="block"></a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>
