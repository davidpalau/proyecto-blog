<x-app-layout>
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 py-8">
        <h1 class="text-center text-2xl">
            Categoría: {{ $category->name }}
        </h1>
        @foreach ($posts as $post)
        <x-plantilla-post :post='$post'>
        </x-plantilla-post>
        @endforeach
            <div class="mt-4">{{$posts->links()}}</div>
    </div>
</x-app-layout>
