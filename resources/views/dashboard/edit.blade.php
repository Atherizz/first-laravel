<x-layout>
        <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-4">Edit Profile</h2>
            <form action="/dashboard/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 mb-2" for="fullName">Full Name</label>
                        <input class="w-full p-2 border rounded-md" type="text" id="fullName" name="name" value="{{ auth()->User()->name }}">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="email">Email</label>
                        <input class="w-full p-2 border rounded-md" type="email" id="email" name="email" value="{{ auth()->User()->email }}">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="phone">Phone</label>
                        <input class="w-full p-2 border rounded-md" type="text" id="phone" name="phone" value="{{ auth()->User()->phone }}">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="address">Address</label>
                        <input class="w-full p-2 border rounded-md" type="text" id="address" name="address" value="{{ auth()->User()->address }}">
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label class="block text-gray-700 mb-2" for="profilePicture">Profile Picture</label>
                        <input class="w-full p-2 border rounded-md" type="file" id="picture" name="picture">
                    </div>
                </div>
                <div class="flex justify-end">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-md" name="submit" type="submit">
                        <i class="fas fa-save mr-2"></i>Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>