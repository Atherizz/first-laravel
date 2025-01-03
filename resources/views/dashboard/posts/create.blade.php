<x-admin>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Post New Rating</h2>
                <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" id="title" name="title" class="border border-gray-300 rounded-lg py-2 px-4 w-full @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Enter rating title">
                            @error('title')<div class="alert alert-danger"><p style="color: red; font-style:italic">{{ $message }}</p></div>@enderror
                        </div>
                        <div class="w-full">
                            <label for="game-type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select id="game-type" name="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @foreach ($category as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
                            <select id="rating" name="rating" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @php for($i = 1; $i <= 5; $i++) :  @endphp
                            <option value="{{ $i }}">{{ $i }} / 5</option>
                        @php endfor @endphp
                            <input class="w-full p-2 border rounded-md  id="author_id" value="{{ auth()->User()->id }}" type="hidden" name="author_id">
                        </div>
                        <div>
                            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                            <input type="text" id="slug" name="slug" class="border border-gray-300 rounded-lg py-2 px-4 w-full @error('slug') is-invalid @enderror" value="{{ old('slug') }}"" placeholder="Enter blog slug">
                            @error('slug')<div class="alert alert-danger"><p style="color: red; font-style:italic">{{ $message }}</p></div>@enderror
                        </div>
                        <div>
                        <label class="block text-gray-700 mb-2" for="profilePicture">Profile Picture</label>
                        <input class="w-full p-2 border rounded-md @error('picture') is-invalid @enderror" value="{{ old('picture') }}" type="file" id="picture" name="picture"">
                        @error('picture')<div class="alert alert-danger"><p style="color: red; font-style:italic">{{ $message }}</p></div>@enderror
                        </div>
                        <div class="sm:col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" name="body" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('body') is-invalid @enderror" value="{{ old('body') }} placeholder="Your description here"></textarea>
                            @error('body')<div class="alert alert-danger"><p style="color: red; font-style:italic">{{ $message }}</p></div>@enderror
                        </div>
                    </div>
                    <button type="submit" name="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Add Blog
                    </button>
                </form>
            </div>
          </section>
</x-admin>
          <script>
            const title = document.querySelector('#title')
            const slug = document.querySelector('#slug')

            title.addEventListener('change', function() {
                fetch('/dashboard/posts/createSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            });
          </script>