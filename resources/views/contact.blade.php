<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Main Content -->
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Contact Us</h1>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <!-- Instagram -->
                <div class="flex flex-col items-center">
                    <img src="{{ asset('img/instagram.jpg') }}" alt="Instagram" class="w-16 h-16 mb-4"> <!-- Ganti dengan path gambar Anda -->
                    <a class="text-blue-500 hover:underline text-xl" href="https://www.instagram.com/savero_athllh" target="_blank">@savero_athllh</a>
                </div>
                <!-- WhatsApp -->
                <div class="flex flex-col items-center">
                    <img src="{{ asset('img/wa.png') }}" alt="WhatsApp" class="w-16 h-16 mb-4"> <!-- Ganti dengan path gambar Anda -->
                    <a class="text-blue-500 hover:underline text-xl" href="https://wa.me/85235342960" target="_blank">Text Us</a>
                </div>
                <!-- GitHub -->
                <div class="flex flex-col items-center">
                    <img src="{{ asset('img/github.jpg') }}" alt="GitHub" class="w-16 h-16 mb-4"> <!-- Ganti dengan path gambar Anda -->
                    <a class="text-blue-500 hover:underline text-xl" href="https://github.com/atherizz" target="_blank">Atherizz</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>