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
    
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
          <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
              <div class="h-56 w-full">
                <a href="#">
                  <img class="mx-auto h-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg" alt="iMac Front" />
                  <img class="mx-auto hidden h-full dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="iMac Front Dark" />
                </a>
              </div>
              <div class="pt-6">
                <div class="mb-4 flex items-center justify-between gap-4">
                  <span class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">Up to 35% off</span>
                </div>
                <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Apple iMac 27", 1TB HDD, 5K Display</a>
                <div class="mt-2 flex items-center gap-2">
                  <p class="text-sm font-medium text-gray-900 dark:text-white">5.0</p>
                  <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(455)</p>
                </div>
                <div class="mt-4 flex items-center justify-between gap-4">
                  <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$1,699</p>
                  <button class="rounded-lg bg-primary-700 px-4 py-2 text-sm font-medium text-white hover:bg-primary-800">Pay Now</button>
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