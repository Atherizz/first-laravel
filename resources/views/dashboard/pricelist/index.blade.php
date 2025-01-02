<x-admin>    
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6 ml-6">
            <div class="mb-4 ml-4">
                <a href="/admin/topup/create" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700">
                    Add New Price
                </a>
            </div>
    
            <div class="flex flex-wrap">
                @foreach ($prices->groupBy('id_game') as $gameId => $groupedPrices)
                <div class="w-full md:w-1/2 px-4 mb-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-900">{{ $groupedPrices->first()->category->name }}</h3>
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-800">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                        {{ $groupedPrices->first()->category->point }}
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                        Price
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($groupedPrices as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item['value'] }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item['price'] }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <a href="/admin/topup/{{ $item->id }}/edit" class="text-yellow-600 hover:underline">Edit</a>
                                        <form action="/admin/topup/{{ $item->id }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</x-admin>