<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

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

    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="bg-white p-12 rounded-lg shadow-md w-full max-w-2xl">
            @auth
            <h1 class="text-3xl font-bold mb-8">
                Choose your Game to Topup
            </h1>
            @else
            <h1 class="text-3xl font-bold mb-8">
                Login to Top Up!
            </h1>
            @endauth
            @auth
            <div class="grid grid-cols-2 gap-8">
                @foreach ($category as $item)
                <a class="block text-center" href="/game/order/{{ $item->slug }}">
                    <img alt="Logo Valorant" class="mx-auto mb-4" height="120" src="{{ asset('img/' . $item->img)  }}" width="120"/>
                    <span class="text-gray-700 font-bold text-lg">
                        {{ $item->name }}
                    </span>
                </a>        
                @endforeach
            </div>
            @else
            <div class="grid grid-cols-2 gap-8">
                @foreach ($category as $item)
                <p class="block text-center" href="/game/order/{{ $item->slug }}">
                    <img alt="Logo Valorant" class="mx-auto mb-4" height="120" src="{{ asset('img/' . $item->img)  }}" width="120"/>
                    <span class="text-gray-700 font-bold text-lg">
                        {{ $item->name }}
                    </span>
                </p>        
                @endforeach
            </div>
            @endauth

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
