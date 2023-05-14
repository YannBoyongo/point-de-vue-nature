<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderByDesc('title')->paginate(25);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
        ]);

        $slug = "";

        $post = Post::create([
            'title' => $request->title,
            'slug' => $slug,
        ]);

        return redirect()->route('posts.edit', $post)->with("message", __('Données enregistreé'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->back()->with("message", __('Données enregistreé'));
    }

    public function add_image(Request $request, Post $post)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:20480',
        ]);
        $requestedImage = $request->file('image');

        if ($requestedImage) {
            $image_name = time() . '.' . $requestedImage->getClientOriginalExtension();
            $imgFile = \Intervention\Image\Facades\Image::make($requestedImage->getRealPath())
                ->resize(1200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->stream();

            Storage::disk('public')->put('posts/' . '/' . $image_name, $imgFile, 'public');
        }

        $post->image = $image_name;
        $post->save();

        return redirect()->back()->with('message', __('Image enregistrée avec succès'));
    }

    public function delete_image(Post $post)
    {
        if (is_file(public_path('storage/posts/' . '' . $post->image))) {
            unlink(public_path('storage/posts/' . '' . $post->image));
        }

        Post::where('id', $post->id)->update(['image' => null]);

        return redirect()->back()->with('message', __('Image supprimée'));
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            if (is_file($post->image)) {
                unlink($post->image);
            }
        }
        $post->delete();
        return redirect()->route("posts.index")->with('success', __('Données supprimées avec succès'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function publish(Post $post)
    {
        $post->status = 1;
        $post->published_at = date('Y-m-d');
        $post->save();

        return redirect()->route('posts.edit', $post)->with("message", __('Actualité publiée avec succès'));
    }
    public function unpublish(Post $post)
    {
        $post->status = 0;
        $post->published_at = null;
        $post->save();
        return redirect()->route('posts.edit', $post)->with("message", __('Actualité retirée avec succès'));
    }
}
