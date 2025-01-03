<x-admin>
        <main class="flex-1 p-16">
                <h1 class="text-4xl font-bold">Welcome, {{auth()->User()->username}} </h1>
                <br>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Manage Review</h2>
                    <p class="text-gray-600 mb-4">Create, edit, and delete review posts.</p>
                    <a class="text-blue-500 hover:underline" href="/dashboard/posts">Go to Review Management</a>
                </div>
                @can('admin')
                    
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Manage Pricelist</h2>
                    <p class="text-gray-600 mb-4">Update and manage your pricelist.</p>
                    <a class="text-blue-500 hover:underline" href="/dashboard/pricelist">Go to Pricelist Management</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Manage Orders</h2>
                    <p class="text-gray-600 mb-4">View and process customer orders.</p>
                    <a class="text-blue-500 hover:underline" href="/dashboard/order">Go to Order Management</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Manage Category</h2>
                    <p class="text-gray-600 mb-4">Create, edit, and delete category</p>
                    <a class="text-blue-500 hover:underline" href="/dashboard/category">Go to Category Management</a>
                </div>
                @endcan
            </div>
        </main>
    </div>

</x-admin>