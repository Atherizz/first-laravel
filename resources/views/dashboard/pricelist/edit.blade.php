<x-admin>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Pricelist</h2>
            <form action="/dashboard/pricelist/{{ $price->id }}" method="POST">
                @method('put')
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="game-type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Game</label>
                        <select id="game-type" name="id_game" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($category as $item)
                                <option value="{{ $item['id'] }}" 
                                    @if ($price->id_game == $item['id']) selected 
                                    @endif>
                                    {{ $item['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="value" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Value</label>
                        <input type="text" id="value" name="value" class="border border-gray-300 rounded-lg py-2 px-4 w-full @error('value') is-invalid @enderror" value="{{ old('value', $price->value) }}" placeholder="Enter value">
                        @error('value')<div class="alert alert-danger"><p style="color: red; font-style:italic">{{ $message }}</p></div>@enderror
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="text" id="price" name="price" class="border border-gray-300 rounded-lg py-2 px-4 w-full @error('price') is-invalid @enderror" value="{{ old('price', $price->price) }}" placeholder="Enter price">
                        @error('price')<div class="alert alert-danger"><p style="color: red; font-style:italic">{{ $message }}</p></div>@enderror
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Edit Pricelist
                </button>
            </form>
        </div>
      </section>
</x-admin>