<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $article)  
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{ $article['slug']}}" class="hover:underline">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $article['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            By
            <a href="/authors/{{ $article->author->username }}"class="hover:underline">{{ $article->author->name }}</a>
            in
            <a href="/categories/{{ $article->category->slug }}"class="hover:underline">{{ $article->category->name }}</a>

        </div>
        <p class="my-4 font-light">{{ Str::limit( $article['body'], 250)}}</p>
            <a href="/posts/{{ $article['slug']}}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
    </article>
    @endforeach
  </x-layout>
