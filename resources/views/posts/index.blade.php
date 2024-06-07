<x-app-layout>
    <!--Portada-->

    <div class="container-all" id="move-content">
        <div class="blog-container-cover">
            <div class="container-info-cover">

                <h1>!Todos los post en My Blog!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aliquam quis fuga beatae blanditiis
                    assumenda.</p>
            </div>
        </div>
        </article>
        <div class="container-all" id="move-content">
            <div class="posts">
                @foreach ($posts as $post)
                    <div class="post" data-category="CSS">
                        <div class="ctn-img mb-6 ">
                            <img src="{{ $post->image ? Storage::url($post->image->url) : asset('img/demo/5.jpg') }}" alt="">
                        </div>
                        <h2 class="text-9xl pl-6 font-bold text-slate-600">{{ ($post->name )}}</h2>
                        <p><span class="h-auto">{!! $post->extract !!}<br><a class="bg-MyColor text-white rounded-md px-2 py-1 text-sm font-normal"
                                    href="{{ route('posts.show', $post) }}">
                                    Leer más</a><br></span>
                        <ul class="ctn-tag">
                            @foreach ($post->tags as $tag)
                                <li class="rounded-xl text-slate-600 font-medium"> <a
                                        href="{{ route('posts.tag', $tag) }}">{{ $tag->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>

            <div class="mt-4">{{ $posts->links() }}</div>

</x-app-layout>
