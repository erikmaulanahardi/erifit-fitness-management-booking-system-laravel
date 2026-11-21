<x-layout title="My Profile">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">My Profile</h1>
            <p class="text-sm text-gray-500">Kelola informasi pribadi dan pantau progres kebugaranmu di EriFit.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">

            <div class="space-y-6">

                <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm text-center">
                    <div class="w-20 h-20 mx-auto rounded-full bg-red-100 text-red-600 flex items-center justify-center text-2xl font-extrabold uppercase">
                        ME
                    </div>

                    <h2 class="mt-4 text-lg font-bold text-gray-900">{{auth()->user()->member?->name}}</h2>
                    <p class="text-sm text-gray-500"><span>@</span>{{ auth()->user()->username }}</p>
                    <p class="text-xs text-gray-400 mt-1">{{ auth()->user()->email }}</p>

                    <div class="mt-4 pt-4 border-t border-gray-100 flex justify-center gap-2">
                        @if (auth()->user()->member?->is_active)
                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-700">
                            Active Member
                        </span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">
                            Verified
                        </span>
                        @else
                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-700">
                            Inactive
                        </span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">
                            Unverified
                        </span>
                        @endif
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-4">
                        Body Metrics
                    </h3>

                    <div class="grid grid-cols-2 grid-rows-2 gap-2 text-center">
                        <div class="p-3 bg-gray-50 rounded-lg border border-gray-100">
                            <p class="text-xs text-gray-500">Weight</p>
                            <p class="text-base font-bold text-gray-900 mt-0.5">{{ auth()->user()->member?->body_weight }} <span> kg</span></p>
                        </div>

                        <div class="p-3 bg-gray-50 rounded-lg border border-gray-100">
                            <p class="text-xs text-gray-500">Height</p>
                            <p class="text-base font-bold text-gray-900 mt-0.5">{{ auth()->user()->member?->body_height }} <span> cm</span></p>
                        </div>

                        @if(auth()->user()->member?->bmi >= 25)
                        <div class="p-3 bg-red-50 rounded-lg border border-red-100">
                            <p class="text-xs text-red-600 font-medium">BMI</p>
                            <p class="text-base font-extrabold text-red-700 mt-0.5">{{ auth()->user()->member?->bmi }}</p>
                        </div>

                        @elseif(auth()->user()->member?->bmi > 18.5 && auth()->user()->member?->bmi < 25)
                        <div class="p-3 bg-green-50 rounded-lg border border-red-100">
                            <p class="text-xs text-green-600 font-medium">BMI</p>
                            <p class="text-base font-extrabold text-green-700 mt-0.5">{{ auth()->user()->member?->bmi }}</p>
                        </div>

                        @elseif(auth()->user()->member?->bmi <= 18.5)
                        <div class="p-3 bg-red-50 rounded-lg border border-red-100">
                            <p class="text-xs text-red-600 font-medium">BMI</p>
                            <p class="text-base font-extrabold text-red-700 mt-0.5">{{ auth()->user()->member?->bmi }}</p>
                        </div>
                        @endif

                        <div class="p-3 bg-red-50 rounded-lg border border-red-100">
                            <p class="text-xs text-red-600 font-medium">FFMI</p>
                            <p class="text-base font-extrabold text-red-700 mt-0.5">{{ auth()->user()->member?->ffmi }}</p>
                        </div>
                    </div>
                        
                    @if(auth()->user()->member?->bmi >= 25)
                    <p class="text-xs text-gray-400 mt-3 text-center">
                        Kategori: <span class="font-semibold text-gray-600">Overweight | Terlalu Gemuk</span>
                    </p>
                    @elseif(auth()->user()->member?->bmi > 18.5 && auth()->user()->member?->bmi < 25)
                    <p class="text-xs text-gray-400 mt-3 text-center">
                        Kategori: <span class="font-semibold text-gray-600">Normal / Ideal</span>
                    </p>
                    @elseif(auth()->user()->member?->bmi <= 18.5)
                    <p class="text-xs text-gray-400 mt-3 text-center">
                        Kategori: <span class="font-semibold text-gray-600">Underweight / Terlalu Kurus</span>
                    </p>
                    @endif
                </div>

            </div>

            <div class="lg:col-span-2 bg-white p-6 sm:p-8 rounded-xl border border-gray-200 shadow-sm">
                <div class="border-b border-gray-100 pb-4 mb-6">
                    <h2 class="text-lg font-bold text-gray-900">Edit Profile Account</h2>
                    <p class="text-xs text-gray-500 mt-0.5">Perbarui data diri dan ukuran tubuhmu secara berkala.</p>
                </div>
                
                <form action="profiles.index" method="POST" class="space-y-5">
                    @csrf

                    <div class="grid grid-cols-2 sm:grid-cols-2 gap-4 ">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Full Name :</label>
                            <input type="text" name="name" placeholder="{{auth()->user()->member?->name}}"
                                class="w-full rounded-lg border-gray-300 text-sm focus:border-red-500 focus:ring-red-500">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Body Fat Percentage :</label>
                            <input type="number" name="body_fat_percentage" placeholder="{{auth()->user()->member?->body_fat_percentage}}%"
                                class="w-full rounded-lg border-gray-300 text-sm focus:border-red-500 focus:ring-red-500">
                        </div>
                    </div>


                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Phone Number :</label>
                            <input type="text" name="phone_number" placeholder="{{ auth()->user()->member?->phone_number }}"
                                class="w-full rounded-lg border-gray-300 text-sm focus:border-red-500 focus:ring-red-500">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Date of Birth :</label>
                            <input type="date" name="date_of_birth" placeholder="{{ auth()->user()->member?->date_of_birth }}"
                                class="w-full rounded-lg border-gray-300 text-sm focus:border-red-500 focus:ring-red-500">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Body Weight (Kg) :</label>
                            <input type="number" step="0.01" name="body_weight" placeholder="{{ auth()->user()->member?->body_weight }}"
                                class="w-full rounded-lg border-gray-300 text-sm focus:border-red-500 focus:ring-red-500">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Body Height (cm) :</label>
                            <input type="number" step="0.01" name="body_height" placeholder="{{ auth()->user()->member?->body_height }}"
                                class="w-full rounded-lg border-gray-300 text-sm focus:border-red-500 focus:ring-red-500">
                        </div>
                    </div>

                    <div class="pt-4 border-t border-gray-100 flex justify-end">
                        <button type="submit"
                            class="px-5 py-2.5 rounded-lg bg-emerald-500 hover:bg-emerald-600 text-white text-sm font-semibold shadow-sm transition cursor-pointer">
                            Save Profile
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-layout>