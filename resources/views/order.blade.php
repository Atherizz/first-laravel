<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
      <body class="bg-gray-100">
          <!-- Main Content -->
          <div class="container mx-auto p-6">
              <h1 class="text-3xl font-bold mb-6">Order Form </h1>
              <div class="bg-white p-6 rounded-lg shadow-md">
                  <form method="POST" action="/game/order">
                    @csrf
                    <input type="hidden" id="game-input" name="game" value="{{ $title }}">
                    <input type="hidden" id="status" name="status" value="unpaid">
                    <input type="hidden" id="user_id" name="user_id" value="{{ auth()->User()->id }}">
                      <!-- Topup Amount -->
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="topup-amount">Jumlah Topup</label>
                          <select id="game-type" name="value" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">
                              <option value="" disabled selected>Choose Top Up Amount</option>
                            @foreach ($price as $item)
                            <option value="{{ $item->value }}" data-price="{{ $item->price }}">{{ $item->value }} {{ $point }} | Rp. {{ $item->price }}</option>
                            @endforeach
                        </select>
                      </div>
                      <input type="hidden" id="price-input" name="price" value="">

    
                      {{-- <!-- Payment Method -->
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="payment-method" name="payment">Metode Pembayaran</label>
                          <select id="payment-method" name="payment" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                              <option value="bank-transfer">Bank Transfer</option>
                              <option value="credit-card">Credit Card</option>
                              <option value="e-wallet">E-Wallet</option>
                          </select>
                      </div> --}}
                      <!-- Other Form Fields -->
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                          <input id="username" name="username" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Masukkan username"/>
                          @error('username')<div class="alert alert-danger"><p style="color: red; font-style:italic">{{ $message }}</p></div>@enderror
                      </div>
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                          <input id="email" type="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Masukkan email"/>
                          @error('email')<div class="alert alert-danger"><p style="color: red; font-style:italic">{{ $message }}</p></div>@enderror
                      </div>
                      <!-- Order Button -->
                      <div class="flex items-center justify-between">
                          <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                              Order
                          </button>
                      </div>
                  </form>
              </div>
          </div>
  </x-layout>

  <script>
    document.getElementById('game-type').addEventListener('change', updatePrice);

    function updatePrice() {
        const select = document.getElementById('game-type');
        const selectedOption = select.options[select.selectedIndex];
        const priceInput = document.getElementById('price-input');
        priceInput.value = selectedOption.getAttribute('data-price') || '';
    }
</script>
