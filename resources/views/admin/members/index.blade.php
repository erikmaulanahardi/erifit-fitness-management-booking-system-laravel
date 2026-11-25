<x-admin-layout>

    <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white shadow-sm">
        <table class="w-full text-left text-sm text-gray-700 border border-gray-700">
            <thead
                class="border-b border-gray-200 bg-gray-50 text-xs font-semibold uppercase tracking-wider text-gray-500">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Member Name</th>
                    <th class="px-6 py-3">Phone Number</th>
                    <th class="px-6 py-3">Date of Birth</th>
                    <th class="px-6 py-3">Body Weight</th>
                    <th class="px-6 py-3">Body Height</th>
                    <th class="px-6 py-3">Status</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @forelse ($members as $index => $member)
                    <tr class="transition-colors hover:bg-gray-50">
                        <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                            {{ $members->firstItem() + $index }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                            {{ $member->name}}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                            {{ $member->phone_number }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                            {{ $member->date_of_birth }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                            {{ $member->body_weight}}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                            {{ $member->body_height}}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            @if ($member->is_active)
                            <span class="inline-flex items-center rounded-full bg-green-300 px-2.5 py-0.5 text-xs font-medium text-green-700">
                                Active
                            </span class="inline-flex items-center rounded-full bg-red-300 px-2.5 py-0.5 text-xs font-medium text-red-700">
                            @else
                            <span>
                                Inactive
                            </span>
                            @endif
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-8 text-center text-gray-800">
                                Belum ada member yang terdaftar di sistem EriFit!
                            </td>
                        </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</x-admin-layout>