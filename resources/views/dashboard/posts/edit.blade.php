<x-admin>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit blog</h2>
            <form action="/dashboard/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" id="title" name="title" class="border border-gray-300 rounded-lg py-2 px-4 w-full @error('title') is-invalid @enderror" value="{{  $post->title }}" placeholder="Enter blog title">
                        @error('title')<div class="alert alert-danger"><p style="color: red; font-style:italic">{{ $message }}</p></div>@enderror
                    </div>
                    <div class="w-full">
                        <label for="game-type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="game-type" name="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($category as $item)
                                <option value="{{ $item['id'] }}" 
                                    @if ($post->category_id == $item['id']) selected 
                                    @endif>
                                    {{ $item['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="author_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author</label>
                        <select id="game-type" name="author_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($author as $item)
                                <option value="{{ $item['id'] }}" 
                                    @if ($post->author_id == $item['id']) selected 
                                    @endif>
                                    {{ $item['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                        <input type="text" id="slug" name="slug" class="border border-gray-300 rounded-lg py-2 px-4 w-full @error('slug') is-invalid @enderror" value="{{ $post->slug }}" placeholder="Enter blog slug">
                        @error('slug')<div class="alert alert-danger"><p style="color: red; font-style:italic">{{ $message }}</p></div>@enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="profilePicture">Profile Picture</label>
                        <input class="w-full p-2 border rounded-md" type="file" id="picture" name="picture"">
                        </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" name="body" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('body') is-invalid @enderror">{{ old('body', $post->body) }}</textarea>
                        @error('body')<div class="alert alert-danger"><p style="color: red; font-style:italic">{{ $message }}</p></div>@enderror
                    </div>
                </div>
                <button type="submit" name="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Edit Blog
                </button>
            </form>
        </div>
      </section>
</x-admin>