<x-guest-layout>
    <div class="grid grid-cols-12">
        <aside class="col-span-3 bg-slate-500 h-96">
            <h2 class="text-center">Menu de navegacón</h2>
            <div class="ml-12 mt-3 right-6 text-white">
                <p class=""><a href="{{ route('admin.home') }}">Dashboard</a></p>
                <h2 class="mx-3 text-white">Herramientas de adminintración</h2>


            </div>

        </aside>
        <article class="bg-green-300 col-span-9">
            <h1 class="text-center">Administración Proyecto blog</h1>
        </article>
    </div>
</x-guest-layout>
