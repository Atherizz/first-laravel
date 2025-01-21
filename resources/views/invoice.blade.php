<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @if (session()->has('success'))
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden mb-5">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative w-full" role="alert">
                <strong class="font-bold">{{ session('success') }}</strong>
                <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Close</title>
                        <path d="M14.348 5.652a1 1 0 10-1.414-1.414L10 7.172 7.066 5.066a1 1 0 00-1.414 1.414l2.934 2.934-2.934 2.934a1 1 0 101.414 1.414l2.934-2.934 2.934 2.934a1 1 0 001.414-1.414L12.414 10l2.934-2.934z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    @endif

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold text-center">Invoice</h1>
        <div class="mt-8 flex justify-center">
            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-2xl">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h2 class="text-2xl font-semibold">RizzGameLab</h2>
                        <p class="text-gray-600">Order Invoice</p>
                    </div>
                    <div class="text-right">
                        <p class="text-gray-600">{{ $order['created_at']->diffForHumans() }}</p>
                        <p class="text-gray-600">Order ID : {{ $order->id }}</p>
                    </div>
                </div>
                <div class="border-t border-gray-200 pt-4">
                    <div class="flex items-center mb-4">
                        <img alt="Game Logo" class="w-24 h-24 object-cover rounded-lg" height="96" src="{{ asset('img/' . $order->category->img) }}" width="96"/>
                        <div class="ml-4">
                            <h3 class="text-xl font-semibold">{{ $order->category->name }}</h3>
                            <p class="text-gray-600">{{ $order->value }} {{ $order->category->point }}</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-600"><span class="font-semibold">Username/ID: </span>{{ $order->username }}</p>
                        <p class="text-gray-600"><span class="font-semibold">Email: </span>{{ $order->email }}</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold">Rp. {{ $order->price }}</span>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Download Invoice</button>
                </div>
                <div class="mt-4 text-center">
                    <a href="/" class="bg-gray-600 text-white px-4 py-2 rounded-lg">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>

<script>
    document.querySelectorAll('[data-dismiss="alert"]').forEach((button) => {
        button.addEventListener('click', () => {
            button.parentElement.remove();
        });
    });
</script>