<x-admin>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <!-- Form and Buttons -->
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">Game</th>
                                <th scope="col" class="px-4 py-3">Top Up Value</th>
                                <th scope="col" class="px-4 py-3">Price</th>
                                <th scope="col" class="px-4 py-3">Payment</th>
                                <th scope="col" class="px-4 py-3">Username</th>
                                <th scope="col" class="px-4 py-3">Email</th>
                                <th scope="col" class="px-4 py-3">Transaction Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $item)
                            <tr class="border-b dark:border-gray-700">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->game }}</th>
                                <td class="px-4 py-3">{{ $item->value }}</td>
                                <td class="px-4 py-3">{{ $item->price}}</td>
                                <td class="px-4 py-3">{{ $item->payment }}</td>
                                <td class="px-4 py-3">{{ $item->username }}</td>
                                <td class="px-4 py-3">{{ $item->email}}</td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input id="status-toggle" type="checkbox" class="sr-only peer">
                                            <div class="w-11 h-6 bg-gray-300 rounded-full peer-checked:bg-green-500 peer-focus:ring-2 peer-focus:ring-green-300 transition-all"></div>
                                            <div class="absolute w-5 h-5 bg-white rounded-full shadow left-1 top-0.5 peer-checked:translate-x-5 transition-all"></div>
                                        </label>
                                        <span class="ml-2 text-gray-900 dark:text-white">Status</span>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-admin>

<script>
    document.querySelectorAll('input[type="checkbox"]').forEach(toggle => {
        toggle.addEventListener('change', function() {
            const statusText = this.parentElement.querySelector('span');
            if (this.checked) {
                statusText.textContent = 'Paid';
                statusText.classList.remove('text-gray-900');
                statusText.classList.add('text-green-600');
            } else {
                statusText.textContent = 'Pending';
                statusText.classList.remove('text-green-600');
                statusText.classList.add('text-gray-900');
            }
        });
    });
</script>