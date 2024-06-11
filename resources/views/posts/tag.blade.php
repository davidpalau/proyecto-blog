<x-app-layout>
    <!--Portada-->

    <div class="container-all" id="move-content">


        <div class="blog-container-cover">
            <div class="container-info-cover">
                <h1 class="tituloblog">
                 {{ $tag->name }}
                </h1>
                <p class="parrafoblog">{!! $tag->summary !!}</p>
            </div>
        </div>
    </article>
    <div class="container-all" id="move-content">
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post" data-category="CSS">
                    <div class="ctn-img">
                        <img src="{{ $post->image ? Storage::url($post->image->url) :asset('img/demo/5.jpg') }}" alt="">
                    </div>
                    <h2 class="text-9xl pl-6 font-bold text-slate-600">{{ $post->name }}</h2>
                    Leer más</a><br></span>
                         <ul class="ctn-tag">
                        @foreach ($post->tags as $tag)
                            <li class="rounded-xl text-slate-600 font-medium"> <a href="{{ route('posts.tag', $tag) }}">{{ $tag->name }}</a>
                            </li>

            @endforeach
        </ul>
        </div>
        @endforeach
    </div>

    <div class="mt-4">{{ $posts->links() }}</div>

</x-app-layout>
