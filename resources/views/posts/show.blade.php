
 <x-app-layout>
    <!--Portada-->

    <div>
        <div class=" bg-MyColor m-5 p-8">
        </div>
    </div>
    </article>
   <div class="">
    <div class="lg:flex  container pr-5">
        <div class="lg:w-3/4  max-w-7xl p-4 rounded-lg bg-white border mr-6 border-gray-200 shadow sm:p-6">
            <h1 class="text-4xl pl-6 font-bold text-gray-600 ">
                {{ $post->name }}
            </h1>
            <div class="text-lg pl-6 text-gray-500">
                <p class="text-justify lg:pr-6 col-span-4">{!! $post->extract !!}</p>
            </div>
            <div class="">
                <div class="">
                    <figure class=""> <br>
                        <img class="w-full" src="{{ $post->image ? Storage::url($post->image->url) :asset('img/demo/5.jpg') }}" alt="">
                    </figure>
                    <div class="p-10">
                        {!! nl2br($post->body) !!}
                    </div>
                </div>
                <ul class="ctn-tag">
                    @foreach ($post->tags as $tag)
                        <li class="rounded-xl text-slate-600 font-medium"> <a
                                href="{{ route('posts.tag', $tag) }}">{{ $tag->name }}</a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
                <aside class="lg:w-1/3 w-5/6 max-w-7xl">
                <div class="ml-12 ">
                    <h2 class="text-4xl mt-3  lg:pl-6 font-bold text-MyColor ">
                        {{ $post->category->name }}
                    </h2>
                    <ul class="">

                        @foreach ($similares as $similar)
                            <br>
                            <div class="">
                                <a class="w-full" href="{{ route('posts.show', $similar) }}">
                                    <img class="w-full rounded-t-lg mt-18 object-cover object-center"
                                        src="{{ Storage::url($similar->image->url) }}" alt="">
                                    <p class="inline-flex w-full px-3 rounded-b-lg bg-white border border-gray-200 shadow py-2 object-cover object-center">
                                        {{ $similar->name }}
                                        <span class="ml-1 mt-1 inline-flex bg-MyColor  text-white rounded-md px-2 py-1 text-sm font-normal"
                                          <a class="text-blue-400" href="{{ route('posts.show', $similar) }}">
                                            Leer más
                                </a></p></span>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
</x-app-layout>
