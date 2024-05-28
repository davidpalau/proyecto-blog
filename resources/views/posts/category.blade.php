<x-app-layout>
                <!--Portada-->

                <div class="container-all" id="move-content">


                    <div class="blog-container-cover">
                        <div class="container-info-cover">
                            <h1>
                                Categoría: {{ $category->name }}
                            </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aliquam quis fuga beatae blanditiis assumenda.</p>
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
                                <p><span>{{ $post->extract }} <br> <a  class="bg-MyColor text-white rounded-md px-2 py-1 text-sm font-normal" href="{{ route('posts.show', $post) }}" class=" font-semibold text-blue-400">
                                        Leer más</a><br></span>
                                     <ul class="ctn-tag">
                                    @foreach ($post->tags as $tag)
                                        <li class="rounded-xl text-slate-600 font-medium"> <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                                        </li>

                        @endforeach
                    </ul>
                    </div>
                    @endforeach
                </div>

                <div class="mt-4">{{ $posts->links() }}</div>

            </x-app-layout>
