@props(['post'])
<article class="mb-8">
    <div class="grid md:grid-cols-4 grid-cols-1">
    <img class="w-50 h-36 object-cover object-center"
    <img class="mx-auto" src="http://localhost/proyecto/1_blog/proyecto-blog/public{{ Storage::url($post->image->url) }}"  alt="">

        <div class="grid p-4 md:pl-5 md:col-span-3 font-bold text-xl mb-2">
            <h2 class=" text-cyan-500">{{ $post->name }}</h2>
           <p class="pr-5">{{ $post->extract }} <a class="text-green-600" href="{{ route('posts.show', $post) }}"> Leer mas </a>
           @foreach ($post->tags as $tag)
           &nbsp;
            <a class="inline-block bg-blue-400 rounded-xl" href="{{ route('posts.tag', $tag) }}">{{ $tag->name }}</a>
           @endforeach
        </p>
        </div>
     </div>
</article>
