<x-admin>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <p class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</p>
                                <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->category->name }}</p>
                                <p class="text-base text-gray-500 dark:text-gray-400"><title="February 8th, 2022">{{ $post['created_at']->diffForHumans() }}</title></p>
                            </div>
                        </div>
                        @can('update-post', $post)
                        
                        <div class="ml-auto flex space-x-2">
                            <a href="/dashboard/posts/{{ $post->id }}/edit" class="inline-flex items-center px-3 py-1 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700">
                                Edit
                            </a>
                            <form action="/dashboard/posts/{{ $post->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center px-3 py-1 text-sm font-medium text-white bg-red-600 rounded hover:bg-red-700">
                                    Delete
                                </button>
                            </form>
                        </div>
                        @endcan
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post['title'] }}</h1>
                    @if ($post['picture'])              
                    <div class="mb-6">
                      <img src="{{ asset('storage/' . $post['picture'])  }}" alt="{{ $post['title'] }}" class="w-full h-auto rounded-lg">
                  </div>
                    @endif
                </header>
                
                <p class="lead">{{ $post['body']}}</p>
                <br>
                <a href="/dashboard/posts" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                    Back to Blog
                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>   
            </article>
        </div>
    </main>
</x-admin>