<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <article class="py-8 max-w-screen-md">
           
        <h2 class="mb-1 text-3x1 tracking-tight font-bold text-gray-900" > {{ $post1 
        ['title'] }}</h2>

        <div class="text-base text-gray-500">
            <a href="#"> {{ $post1 ['author'] }}</a> | {{ $post1->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post1['body'] }}</p>
        <a href="/artikel" class="font-medium text-blue-500 
        hover:underline">&laquo; Back to artikel</a>
    </article>


</x-layout>