<x-app-layout>
    <!--Portada-->

    <div class="container-all" id="move-content">


        <div class="blog-container-cover">
            <div class="container-info-cover">
                <h1>
                    Etiqueta: {{ $tag->name }}
                </h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aliquam quis fuga beatae blanditiis
                    assumenda.</p>
            </div>
        </div>
    </article>
    <div class="container-all" id="move-content">
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post" data-category="CSS">
                    <div class="ctn-img">
                        <img class="" src="{{ Storage::url($post->image->url) }}" alt="">
                    </div>
                    <h2>{{ $post->name }}</h2>
                    <p><span>{{ $post->extract }} <a href="{{ route('posts.show', $post) }}" class="">
                            Leer más</a><br></span>
                    <ul class="ctn-tag">
                        @foreach ($post->tags as $tag)
                            <li> <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                            </li>

            @endforeach
        </ul>
        </div>
        @endforeach
    </div>

    <div class="mt-4">{{ $posts->links() }}</div>

</x-app-layout>

