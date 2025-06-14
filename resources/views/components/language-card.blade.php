@props(['progress', 'languageName'])



<li
    class="p-8 border-2 border-sky-800 bg-sky-950 hover:opacity-80 duration-300 transition-opacity rounded-lg shadow-xs shadow-zinc-900">
    <a href="@" class="block text-white text-lg font-semibold space-y-10">
        <p>{{ $languageName }}</p>
        {{-- Progress bar --}}
        <div class="w-full flex rounded-lg bg-sky-800">
            {{-- Progress bar (completed) --}}
            <div style="width: {{ $progress }}%;" class="h-1 rounded-lg bg-sky-500 relative">
                <div class="w-2 h-2 shadow-xs rounded-full absolute right-0 bg-sky-500 bottom-1/2 translate-y-1/2">
                </div>
            </div>
        </div>
    </a>
</li>
