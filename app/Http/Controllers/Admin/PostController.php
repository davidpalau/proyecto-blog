<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('can:admin.posts.index')->only('index');
    //     $this->middleware('can:admin.posts.create')->only('create','store');
    //     $this->middleware('can:admin.posts.edit')->only('edit','update');
    //     $this->middleware('can:admin.posts.destroy')->only('destroy');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function store(PostRequest $request)
     {
         // Agregar el ID del usuario autenticado a los datos de la solicitud
         $data = $request->all();
         $data['user_id'] = auth()->id();

         // Crear un nuevo post con los datos proporcionados
         $post = Post::create($data);

         // Manejar la carga de archivos si existe
         if ($request->file('file')) {
             // Almacenar el archivo en la carpeta 'posts' del directorio 'public'
             $path = $request->file('file')->move(public_path('storage/posts'), $request->file('file')->getClientOriginalName());
             $url = 'posts/' . $request->file('file')->getClientOriginalName();

             // Crear una relación de imagen para el post
             $post->image()->create([
                 'url' => $url
             ]);
         }

         // Adjuntar etiquetas si se proporcionaron en la solicitud
         if ($request->has('tags')) {
             $post->tags()->attach($request->tags);
         }

         // Limpiar la caché
         Cache::flush();

         // Redirigir al índice de posts con un mensaje de éxito
         return redirect()->route('admin.posts.index')->with('info', 'El post se creó con éxito');
     }
    public function index()
    {
        $posts = Post::all(); // O ajusta esto según tu lógica
        return view('admin.posts.index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        $tags = Tag::all();
        return view('admin.posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('author',$post);

        $categories = Category::pluck('name','id');
        $tags = Tag::all();
        return view('admin.posts.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('author',$post);

        $post->update($request->all());

        if($request->file('file')){
            $url = Storage::put('posts',$request->file('file'));

            if($post->image){
                Storage::delete($post->image->url);

                $post->image()->update([
                    'url' => $url
                ]);
            }else{
                $post->image()->create([
                    'url' => $url
                ]);
            }

        }

        if($request->tags){
            $post->tags()->sync($request->tags);
        }

        Cache::flush();

        return redirect()->route('admin.posts.edit',$post)->with('info','El post se actualizó con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('author',$post);

        $post->delete();
        Cache::flush();
        return redirect()->route('admin.posts.index')->with('info','El post se elimino con éxito');
    }

}
