<x-layout title="Contacts">
    <h2 class="font-bold text-center text-3xl p-5">Our Contacts</h2>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 px-7 py-5">
        @foreach ($contacts as $index => $contactlist)
            <x-cards>
                <div>
                    <span class="mt-4 text-xl font-bold text-slate-900">
                        {{ $index. ' - ' .$contactlist}}
                    </span>
                </div>
            </x-cards>
        @endforeach
    </div>

</x-layout>