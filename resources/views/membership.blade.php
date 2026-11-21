<x-layout title="Memberships">
    <h2 class="text-center font-bold text-3xl p-6">Our Membership Plan</h2>
    <p class="text-center font-bold text-xl pt-4 pb-10">Choose your fitness journey with EriFit!</p>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 pb-8">
        @forelse ($plans as $plan)
        <x-cards>
            <div>
                <span class="mt-4 text-xl font-bold text-slate-900">
                    {{$plan}}
                </span>
            </div>
        </x-cards>
        @empty <p class="font-bold">There are no promo plans right now, sorry!</p>
        @endforelse
    </div>

</x-layout>