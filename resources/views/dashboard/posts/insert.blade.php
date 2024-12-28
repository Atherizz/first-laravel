<x-admin>
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow"> <!-- Mengubah max-w-4xl menjadi max-w-md -->
        <h1 class="text-2xl font-bold mb-6">Add Blog</h1>
        <form>
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                <input type="text" id="title" name="title" class="border border-gray-300 rounded-lg py-2 px-4 w-full" placeholder="Enter blog title">
            </div>
            <div class="mb-4">
                <label for="category" class="block text-gray-700 font-bold mb-2">Category</label>
                <input type="text" id="category" name="category" class="border border-gray-300 rounded-lg py-2 px-4 w-full" placeholder="Enter blog category">
            </div>
            <div class="mb-4">
                <label for="author" class="block text-gray-700 font-bold mb-2">Author</label>
                <input type="text" id="author" name="author" class="border border-gray-300 rounded-lg py-2 px-4 w-full" placeholder="Enter author name">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                <textarea id="description" name="description" class="border border-gray-300 rounded-lg py-2 px-4 w-full" placeholder="Enter blog description"></textarea>
            </div>
            <div class="mb-4">
                <label for="slug" class="block text-gray-700 font-bold mb-2">Slug</label>
                <input type="text" id="slug" name="slug" class="border border-gray-300 rounded-lg py-2 px-4 w-full" placeholder="Enter blog slug">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg">Submit</button>
            </div>
        </form>
    </div>
</x-admin>