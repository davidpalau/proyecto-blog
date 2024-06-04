
<x-app-layout>
    <!--Portada-->

    <div>
        <div class=" bg-MyColor m-5 p-8">
        </div>
    </div>
    </article>

    <div class="flex flex-row container py-8">

        <div class="w-2/3 max-w-7xl p-4 bg-white border mr-6 border-gray-200 shadow sm:p-6">
            <h1 class="text-4xl pl-6 font-bold text-gray-600 ">
                {{ $post->name }}
            </h1>
            <div class="text-lg pl-6 text-gray-500">
                <p class="text-justify lg:pr-6 col-span-4"> {{ $post->extract }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3">
                <div class="col-span-3">
                    <figure class=""> <br>
                        <img class="w-full mx-auto" src="{{ Storage::url($post->image->url) }}" alt="">
                    </figure>
                    <div class="p-10">
                        {{ $post->body }}
                    </div>
                </div>


            </div>
        </div>
                <aside class="w-1/3 max-w-7xl p-4 bg-white border border-gray-200 shadow sm:p-6">
                <div class="ml-12">
                    <h2 class="ml-12">
                        {{ $post->category->name }}
                    </h2>
                    <ul class="ml-10 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4  lg:grid-cols-1">

                        @foreach ($similares as $similar)
                            <br>
                            <div class="mb-4">
                                <a class="flex" href="{{ route('posts.show', $similar) }}">
                                    <img class="w-auto mt-8 object-cover object-center"
                                        src="{{ Storage::url($similar->image->url) }}" alt="">
                                    <p class="bg-white border-5 border-gray-200 shadowmt-5 object-cover object-center">
                                        {{ $similar->name }}
                                        <span class="bg-MyColor text-white rounded-md px-2 py-1 text-sm font-normal"
                                            href="{{ route('posts.show', $similar) }}"
                                            class=" font-semibold text-blue-400">
                                            Leer más
                                </a></p></span>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
</x-app-layout>

