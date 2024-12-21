<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6">
      <h2 class="text-2xl font-bold mb-4 text-gray-900">Topup Game</h2>
      
      <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/2 px-4 mb-6">
              <h3 class="text-xl font-semibold mb-2 text-gray-900">Valorant</h3>
              <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-800">
                          <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                Valorant Point
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                  Price
                              </th>
                          </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($prices as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item['poin'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item['price'] }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>

          <div class="w-full md:w-1/2 px-4 mb-6">
              <h3 class="text-xl font-semibold mb-2 text-gray-900">Mobile Legend</h3>
              <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-800">
                          <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                  Diamonds
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                  Price
                              </th>
                          </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                          <tr>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">100 Diamonds</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 50.000</td>
                          </tr>
                          <tr>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">200 Coins</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 100.000</td>
                          </tr>
                          <tr>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">500 Gems</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 250.000</td>
                          </tr>
                          <tr>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1000 Gold</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 500 .000</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>

  </x-layout>