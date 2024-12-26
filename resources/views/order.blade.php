<x-layout>
    <x-slot:title>{{ $data['title']}}</x-slot:title>
      <body class="bg-gray-100">
          <!-- Main Content -->
          <div class="container mx-auto p-6">
              <h1 class="text-3xl font-bold mb-6">Order Form</h1>
              <div class="bg-white p-6 rounded-lg shadow-md">
                  <form>
                      <!-- Game Type -->
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="game-type">Jenis Game</label>
                          <select id="game-type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                              <option value="valorant">Valorant</option>
                              <option value="mobile-legend">Mobile Legend</option>
                          </select>
                      </div>
                      <!-- Topup Amount -->
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="topup-amount">Jumlah Topup</label>
                          <input id="topup-amount" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan jumlah topup"/>
                      </div>
                      <!-- Total Price -->
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="total-price">Total Harga</label>
                          <input id="total-price" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Total harga" readonly/>
                      </div>
                      <!-- Payment Method -->
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="payment-method">Metode Pembayaran</label>
                          <select id="payment-method" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                              <option value="bank-transfer">Bank Transfer</option>
                              <option value="credit-card">Credit Card</option>
                              <option value="e-wallet">E-Wallet</option>
                          </select>
                      </div>
                      <!-- Other Form Fields -->
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                          <input id="username" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan username"/>
                      </div>
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                          <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan email"/>
                      </div>
                      <!-- Order Button -->
                      <div class="flex items-center justify-between">
                          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                              Order
                          </button>
                      </div>
                  </form>
              </div>
          </div>
  </x-layout>