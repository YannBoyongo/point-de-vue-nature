<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('settings.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $data = $request->validate([
            'name' => 'required',
            'email_1' => 'required',
            'email_2' => 'nullable',
            'tagline' => 'required',
            'phone_1' => 'required',
            'phone_2' => 'nullable',
            'address' => 'nullable',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'youtube' => 'nullable',
            'linkedin' => 'nullable',
        ]);

        $setting->name = $request->name;
        $setting->email_1 = $request->email_1;
        $setting->email_2 = $request->email_2;
        $setting->tagline = $request->tagline;
        $setting->facebook = $request->facebook;
        $setting->phone_1 = $request->phone_1;
        $setting->phone_2 = $request->phone_2;
        $setting->address = $request->address;
        $setting->twitter = $request->twitter;
        $setting->youtube = $request->youtube;
        $setting->linkedin = $request->linkedin;

        $setting->save();

        return redirect()->route('settings.index')->with("message", __('Données modifié avec succès'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add_logo(Setting $setting, Request $request)
    {
        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $requestedImage = $request->file('logo');

        if ($requestedImage) {
            $image_name = time() . '.' . $requestedImage->getClientOriginalExtension();
            $imgFile = \Intervention\Image\Facades\Image::make($requestedImage->getRealPath())
                ->stream();

            Storage::disk('public')->put('settings/' . '/' . $image_name, $imgFile, 'public');
        }

        $setting->logo = $image_name;
        $setting->save();

        return redirect()->route('settings.index')->with("message", __('Logo ajouté avec succès'));

    }

    public function delete_logo(Setting $setting)
    {
        if ($setting->logo) {
            if (is_file(public_path('storage/settings/' . $setting->logo))) {
                unlink(public_path('storage/settings/' . $setting->logo));
            }
        }
        $setting->logo = null;
        $setting->save();

        return redirect()->route('settings.index')->with("message", __('Logo supprimé avec succès'));
    }
}
