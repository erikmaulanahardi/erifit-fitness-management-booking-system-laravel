<x-layout title="My Profile">
    <h1>My Profile</h1>

    <div class="p-6 max-w-xl mx-auto border border-slate-300 shadow-md">
        <p class="text-center font-bold mb-8">Edit Profile Account</p>
        <form action="/profile" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 gap-x-6">
            @csrf
            <div class="col-span-full">
                <label for="fullname" class="block text-sm/6 font-medium text-black">Name :</label>
                <div class="mt-3">
                    <input type="text" class="w-full border border-slate-300 px-3 py-2 text-sm text-slate-900 shadow-sm" id="fullname" name="fullname" placeholder="Enter your full name" required>
                </div>
            </div>
            <div class="col-span-full">
                <label for="phone_number" class="block text-sm/6 font-medium text-black">Phone Number :</label>
                <div class="mt-3">
                    <input type="text" class="w-full border border-slate-300 px-3 py-2 text-sm text-slate-900 shadow-sm" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
                </div>
            </div>
            <div class="col-span-full">
                <label for="date_of_birth" class="block text-sm/6 font-medium text-black">Date of Birth :</label>
                <div class="mt-3">
                    <input type="date" class="w-full border border-slate-300 px-3 py-2 text-sm text-slate-900 shadow-sm" id="date_of_birth" name="date_of_birth" placeholder="Enter your date of birth" required>
                </div>
            </div>

            <div class="col-span-full">
                <label for="body_weight" class="block text-sm/6 font-medium text-black">Body Weight (Kg) :</label>
                <div class="mt-3">
                    <input type="number" step="0.01" class="w-full border border-slate-300 px-3 py-2 text-sm text-slate-900 shadow-sm" id="body weight" name="body_weight" placeholder="Enter your body weight" required>
                </div>
            </div>

            <div class="col-span-full">
                <label for="body_height" class="block text-sm/6 font-medium text-black">Body Height (cm) :</label>
                <div class="mt-3">
                    <input type="number" step="0.01" class="w-full border border-slate-300 px-3 py-2 text-sm text-slate-900 shadow-sm" id="body_height" name="body_height" placeholder="Enter your body height" required>
                </div>
            </div>

            <div class="col-span-6 mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="rounded-xl bg-emerald-500 text-sm/6 font-semibold text-white p-2.5 hover:bg-emerald-600 hover:shadow-xl hover:scale-105 duration-300">
                    Save Profile
                </button>
            </div>

    </div>
    </form>

</x-layout>