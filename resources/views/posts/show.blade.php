<x-app-layout>
    <!--Portada-->

    <div>
      <div class=" bg-MyColor m-5 p-8">
      </div>
    </div>
</article>

    <div class="container py-8">
        <div class="w-full max-w-7xl p-4 bg-white border border-gray-200 shadow sm:p-6">
            <h1 class=" text-4xl pl-6 font-bold text-gray-600 ">
            {{ $post->name}}
        </h1>
        <div class="grid grid-cols-4 text-lg pl-6 text-gray-500 mb-2 ">
          <p class="text-justify lg:pr-96 col-span-4"> {{ $post->extract }}</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3">
            <div class="col-span-2">
                    <figure class="">
                    <img class="mx-auto" src="{{ Storage::url($post->image->url) }}"  alt="">
                    </figure>
                    <div class="p-10">
                        {{ $post->body }}
                    </div>
            </div>
            <aside>
                <div class="ml-12">
                <h2 class="ml-12">
                    {{ $post->category->name }}
                </h2>
                <ul class="ml-10 shadow-inner grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4  lg:grid-cols-1">

                    @foreach ($similares as $similar)
                    <br>
                    <div class="px-8">
                        <a href="{{ route('posts.show', $similar) }}">
                    <img class="w-36 h-20 mt-8 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
                    <li class="w-36 h-20 object-cover object-center">
                        {{$similar->name}}</a></li>
                </div>
                    @endforeach
                </ul>
            </div>
            </aside>

        </div>

    </div>

</x-app-layout>
