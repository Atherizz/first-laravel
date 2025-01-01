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

    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex items-center space-x-6 mb-4">
                <img 
                class="w-24 h-24 rounded-full" 
                src="{{ auth()->User ()->picture ? asset('storage/' . auth()->User ()->picture) : asset('img/user.png')  }}" 
                alt="User  profile picture"
                >            
                <div>
                    <h2 class="text-2xl font-semibold">{{ auth()->User ()->name }}</h2>
                    <p class="text-gray-600">{{ auth()->User ()->email }}</p>
                    <form action="/dashboard/profile/{{  auth()->User ()->id }}" method="POST" class="mt-2" onsubmit="return confirm('Are you sure you want to delete this picture?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="text-sm text-red-500 hover:underline">
                            Delete Profile Picture
                        </button>
                    </form>
                    @error('error')<div class="alert alert-danger"><p style="color: red; font-style:italic">{{ $message }}</p></div>@enderror
                </div>
            </div>
            <div class="mb-4">
                <h3 class="text-xl font-semibold mb-2">Personal Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700">Full Name</label>
                        <p class="bg-gray-100 p-2 rounded-md">{{ auth()->User ()->name }}</p>
                    </div>
                    <div>
                        <label class="block text-gray-700">Email</label>
                        <p class="bg-gray-100 p-2 rounded-md">{{ auth()->User ()->email }}</p>
                    </div>
                    <div>
                        <label class="block text-gray-700">Phone</label>
                        <p class="bg-gray-100 p-2 rounded-md">@empty(auth()->User ()->phone)
                            -
                        @endempty{{ auth()->User ()->phone }}</p>
                    </div>
                    <div>
                        <label class="block text-gray-700">Address</label>
                        <p class="bg-gray-100 p-2 rounded-md">@empty(auth()->User ()->address)
                            -
                        @endempty{{ auth()->User ()->address }}</p>
                    </div>
                </div>
            </div>
            <a href="/" class="text-sm text-blue-500 hover:underline">
                Back to Home
            </a>
            <div class="flex justify-end">
                <a href="/dashboard/profile/{{ auth()->User ()->id }}/edit" class="bg-blue-600 text-white px-4 py-2 rounded-md">
                 Edit Profile
                </a>
            </div>
        </div>
    </div>

</x-layout>

<script>
    document.querySelectorAll('[data-dismiss=" alert"]').forEach((button) => {
        button.addEventListener('click', () => {
            button.parentElement.remove();
        });
    });

</script>