<x-app-layout>
    <div class=" bg-blue-300">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">

            @foreach ($posts as $post)
              <img class="" src="{{ Storage::url($post->image->url) }}"  alt="">
              {{-- <img class="" src="http://localhost/proyecto/4_blog/proyecto-blog/public{{ Storage::url($post->image->url) }}"  alt=""> --}}

                <article class="w-full h-full px-8 flex flex-col justify-center">
                    <p>{{($post->name) }} :  {{$post->extract}} <a href="{{ route('posts.show', $post) }}" class="">
                        Leer más</a><br> Etiquetas:
                 @foreach ($post->tags as $tag)
                        <a href="" class="inline-block px-3 bg-slate-500 text-white rounded-lg">{{$tag->name}}</a>
                 @endforeach
                    </p>
                </article>
            @endforeach


    </div>
    </div>

    <div class="mt-4">{{$posts->links()}}</div>

</x-app-layout>
