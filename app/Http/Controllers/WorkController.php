<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::orderByDesc('title')->paginate(25);

        return view('works.index', compact('works'));
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

        $slug = Str::slug($request->title);

        $work = Work::create([
            'title' => $request->title,
            'slug' => $slug,
        ]);

        return redirect()->route('works.edit', $work)->with("message", __('Données enregistreé'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        return view('works.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        $work->title = $request->title;
        $work->slug = Str::slug($request->title);
        $work->description = $request->description;
        $work->save();

        return redirect()->back()->with("message", __('Données enregistreé'));
    }

    public function add_image(Request $request, Work $work)
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

            Storage::disk('public')->put('works/' . '/' . $image_name, $imgFile, 'public');
        }

        $work->image = $image_name;
        $work->save();

        return redirect()->back()->with('message', __('Image enregistrée avec succès'));
    }

    public function delete_image(Work $work)
    {
        if (is_file(public_path('storage/works/' . '' . $work->image))) {
            unlink(public_path('storage/works/' . '' . $work->image));
        }

        Work::where('id', $work->id)->update(['image' => null]);

        return redirect()->back()->with('message', __('Image supprimée'));
    }

    public function destroy(Work $work)
    {
        if ($work->image) {
            if (is_file(public_path('storage/works/' . '' . $work->image))) {
                unlink(public_path('storage/works/' . '' . $work->image));
            }
        }
        $work->delete();
        return redirect()->route("works.index")->with('success', __('Données supprimées avec succès'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function publish(Work $work)
    {
        $work->status = 1;
        $work->published_at = date('Y-m-d');
        $work->save();

        return redirect()->route('works.edit', $work)->with("message", __('Actualité publiée avec succès'));
    }
    public function unpublish(Work $work)
    {
        $work->status = 0;
        $work->published_at = null;
        $work->save();
        return redirect()->route('works.edit', $work)->with("message", __('Actualité retirée avec succès'));
    }
}
