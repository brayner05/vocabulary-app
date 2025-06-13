<x-layout title="Languages">
    <div class="w-full p-15 flex flex-col items-center">
        <div class="w-full lg:w-1/2 flex flex-col items-center space-y-5">
            <div class="w-full flex ml-4">
                <h2 class="text-white text-2xl font-bold">Languages</h2>
            </div>
            <ul class="w-full space-y-4">
                @foreach ($languages as $language)
                    <x-language-card :language-name="$language->name" :progress="65"></x-language-card>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>
