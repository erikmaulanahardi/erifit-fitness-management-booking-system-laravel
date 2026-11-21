<x-layout title="Dashboard">

    <div class="max-w-7xl mx-auto p-6 space-y-8">

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Halo, siap berlatih dengan EriFit hari ini?</h1>
                <p class="text-sm text-gray-600 mt-1">Jangan lupa untuk terus memantau progress kamu ya!</p>
            </div>

            <div class="flex flex-wrap gap-3">
                <button
                    class="bg-red-600 hover:bg-red-700 text-white font-medium px-4 py-2 rounded-2xl text-sm transition shadow-sm">
                    Catat Workout Log
                </button>
                <button
                    class="bg-red-600 hover:bg-red-700 text-white font-medium px-4 py-2 rounded-2xl text-sm transition shadow-sm">
                    +Booking Personal Trainer
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="border border-gray-100 bg-white p-6 rounded-xl shadow-sm flex flex-col justify-between">
                <span class="text-m font-medium text-gray-800">Status Membership</span>
                <span class="text-sm font-medium pt-2 text-gray-700">Paket yang aktif : Gold Edition</span>
                <div class="mt-4 flex items-center justify-between">
                    <span class="bg-emerald-100 rounded-full px-3 py-1 text-sm text-emerald-700 font-semibold">Aktif (Tanggal)</span>
                </div>
            </div>

            <div class="border border-gray-100 bg-white p-6 rounded-xl shadow-sm flex flex-col justify-between">
                <span class="text-m font-medium text-gray-800">Jadwal Mendatang</span>
                <h3 class="text-lg font-bold text-gray-900 mt-2">Upper Day</h3>
                <p class="text-sm mt-3">Sesi latihan berikutnya</p>
            </div>

            <div class="border border-gray-100 bg-white p-6 rounded-xl shadow-sm flex flex-col justify-between">
                <span class="text-m font-medium text-gray-800">Progress Workout</span>
                <div class="flex items-baseline gap-2 mt-2">
                    <span class="text-2xl font-bold text-gray-900">Chest Press+50kg</span>
                    <span class="text-sm text-red-700 font-medium">Beban +60kg</span>
                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            {{-- card 1 booking 1 --}}
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between border-b pb-4">
                        <h2 class="text-lg font-bold text-gray-900 flex items-center gap-2">Jadwal Booking Personal
                            Trainer</h2>
                        <span class="text-sm text-gray-900">Berikut ini merupakan jadwal sesi PT yang telah Anda
                            booking</span>
                    </div>

                    <div class="divide-y divide-gray-100">

                        <div class="py-4 flex items-center justify-between">
                            <div>
                                <p class="font-semibold text-gray-900">20 November | 16.00 - 17.00 |</p>
                                <p class="text-sm text-gray-800">Personal Trainer : Kak Mela</p>
                            </div>
                            <span class="text-sm text-gray-700 pr-6">Status : Scheduled</span>
                        </div>

                        <div class="py-4 flex items-center justify-between">
                            <div>
                                <p class="font-semibold text-gray-900">21 November | 14.00 - 15.00 |</p>
                                <p class="text-sm text-gray-800">Personal Trainer : Kak Tonin</p>
                            </div>
                            <span class="text-sm text-gray-700 pr-6">Status : Scheduled</span>
                        </div>
                    </div>
                </div>

                <div class="pt-4 border-t mt-6">
                    <a href="#" class="bloxk text-center text-sm font-medium text-red-600 hover:text-red-700 transition">Lihat semua jadwal booking PT-></a>
                </div>
            </div>

            {{-- card 2 booking 2 --}}
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between border-b pb-4">
                        <h2 class="text-lg font-bold text-gray-900 flex items-center gap-2">Jadwal Booking Personal
                            Trainer</h2>
                        <span class="text-sm text-gray-900">Berikut ini merupakan jadwal sesi PT yang telah Anda
                            booking</span>
                    </div>

                    <div class="divide-y divide-gray-100">

                        <div class="py-4 flex items-center justify-between">
                            <div>
                                <p class="font-semibold text-gray-900">20 November | 16.00 - 17.00 |</p>
                                <p class="text-sm text-gray-800">Personal Trainer : Kak Mela</p>
                            </div>
                            <span class="text-sm text-gray-700 pr-6">Status : Scheduled</span>
                        </div>

                        <div class="py-4 flex items-center justify-between">
                            <div>
                                <p class="font-semibold text-gray-900">21 November | 14.00 - 15.00 |</p>
                                <p class="text-sm text-gray-800">Personal Trainer : Kak Tonin</p>
                            </div>
                            <span class="text-sm text-gray-700 pr-6">Status : Scheduled</span>
                        </div>
                    </div>
                </div>

                <div class="pt-4 border-t mt-6">
                    <a href="#" class="bloxk text-center text-sm font-medium text-red-600 hover:text-red-700 transition">Lihat semua jadwal booking PT-></a>
                </div>

        </div>

    </div>

</x-layout>