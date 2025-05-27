<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

@foreach ( $artikel as $post1 )
        

    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/artikel/{{ $post1['slug'] }}" class="hover:underline">
            <h2 class="mb-1 text-3x1 tracking-tight font-bold text-gray-900" > {{ $post1 
            ['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#"> {{ $post1 ['author'] }}</a> | {{ $post1->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post1['body'], 100) }}</p>
        <a href="/artikel/{{ $post1['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
@endforeach

</x-layout>