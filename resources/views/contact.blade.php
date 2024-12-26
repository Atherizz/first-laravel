<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
            <!-- Main Content -->
            <div class="container mx-auto p-6">
                <h1 class="text-3xl font-bold mb-6">Contact Us</h1>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                        <!-- Instagram -->
                        <div class="flex flex-col items-center">
                            <i class="fab fa-instagram text-6xl text-pink-500 mb-4"></i>
                            <a class="text-blue-500 hover:underline text-xl" href="https://www.instagram.com/yourprofile" target="_blank">yourprofile</a>
                        </div>
                        <!-- WhatsApp -->
                        <div class="flex flex-col items-center">
                            <i class="fab fa-whatsapp text-6xl text-green-500 mb-4"></i>
                            <a class="text-blue-500 hover:underline text-xl" href="https://wa.me/yourphonenumber" target="_blank">+1234567890</a>
                        </div>
                        <!-- GitHub -->
                        <div class="flex flex-col items-center">
                            <i class="fab fa-github text-6xl text-gray-800 mb-4"></i>
                            <a class="text-blue-500 hover:underline text-xl" href="https://github.com/yourusername" target="_blank">yourusername</a>
                        </div>
                    </div>
                </div>
            </div>
        </html>
  </x-layout>
