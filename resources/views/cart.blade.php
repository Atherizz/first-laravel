<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @if (session()->has('success'))
      <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
          <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden mb-5">
              <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative w-full"
                  role="alert">
                  <strong class="font-bold">{{ session('success') }}</strong>
                  <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert">
                      <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20">
                          <title>Close</title>
                          <path
                              d="M14.348 5.652a1 1 0 10-1.414-1.414L10 7.172 7.066 5.066a1 1 0 00-1.414 1.414l2.934 2.934-2.934 2.934a1 1 0 101.414 1.414l2.934-2.934 2.934 2.934a1 1 0 001.414-1.414L12.414 10l2.934-2.934z" />
                      </svg>
                  </button>
              </div>
          </div>
      </div>
  @endif

  <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
      <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
          <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
              <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                  <div class="h-56 w-full">
                      <a href="#">
                          <img class="mx-auto h-full dark:hidden" src="{{ asset('img/' . $order->category->img) }}"
                              alt="" />
                          <img class="mx-auto hidden h-full dark:block"
                              src="{{ asset('img/' . $order->category->img) }}" alt="" />
                      </a>
                  </div>
                  <div class="pt-6">
                      <div class="mb-4 flex items-center justify-between gap-4">
                          <span
                              class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">{{ $order->category->name }}</span>
                      </div>
                      <a href="#"
                          class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{ $order->value }}
                          {{ $order->category->point }}</a>
                      <div class="mt-2 flex flex-col gap-2">
                          <p class="text-sm font-medium text-gray-900 dark:text-white">Username :
                              {{ $order->username }}</p>
                          <p class="text-sm font-medium text-gray-900 dark:text-white">Email : {{ $order->email }}
                          </p>
                      </div>
                      <div class="mt-4 flex items-center justify-between gap-4">
                          <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">Rp.
                              {{ $order->price }}</p>
                          <button id="pay-button"
                              class="rounded-lg bg-primary-700 px-4 py-2 text-sm font-medium text-white hover:bg-primary-800">
                              Pay Now
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Payment Modal -->
  <div id="payment-modal" class="fixed inset-0 z-50 hidden">
      <!-- Modal Backdrop -->
      <div class="fixed inset-0 bg-black bg-opacity-50" id="modal-backdrop"></div>
      
      <!-- Modal Content -->
      <div class="fixed inset-0 flex items-center justify-center p-4">
          <div class="relative w-full max-w-[380px]"> <!-- Adjusted width to match Midtrans modal -->
              <!-- Close button -->
              <button id="close-modal" class="absolute -right-2 -top-2 z-50 rounded-full bg-white p-2 shadow-lg">
                  <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                      </path>
                  </svg>
              </button>
              <!-- Snap Container with adjusted height -->
              <div id="snap-container" class="h-[600px] rounded-lg bg-white"></div>
          </div>
      </div>
  </div>
</x-layout>

<script type="text/javascript">
  // Modal control
  const modal = document.getElementById('payment-modal');
  const closeButton = document.getElementById('close-modal');
  const modalBackdrop = document.getElementById('modal-backdrop');
  const payButton = document.getElementById('pay-button');

  function openModal() {
      modal.classList.remove('hidden');
      document.body.style.overflow = 'hidden';
  }

  function closeModal() {
      modal.classList.add('hidden');
      document.body.style.overflow = 'auto';
  }

  // Close modal events
  closeButton.addEventListener('click', closeModal);
  modalBackdrop.addEventListener('click', closeModal);

  // Payment button click handler
  payButton.addEventListener('click', function() {
      openModal();
      window.snap.embed('{{ $order->snap_token }}', {
          embedId: 'snap-container',
          onSuccess: function(result) {
              alert("payment success!");
              console.log(result);
              closeModal();
          },
          onPending: function(result) {
              alert("waiting your payment!");
              console.log(result);
          },
          onError: function(result) {
              alert("payment failed!");
              console.log(result);
              closeModal();
          },
          onClose: function() {
              alert('you closed the popup without finishing the payment');
              closeModal();
          }
      });
  });

  // Alert dismiss
  document.querySelectorAll('[data-dismiss="alert"]').forEach((button) => {
      button.addEventListener('click', () => {
          button.parentElement.remove();
      });
  });
</script>