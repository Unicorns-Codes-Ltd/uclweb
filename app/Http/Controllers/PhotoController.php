<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Album;
use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $albums = Album::all();
        return view('dashboard.gallaries.create', compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhotoRequest $request)
    {
        // return $request;
        $photo = new Photo;
        if ($request->file('cover')) {
            $thumbnail = $request->file('cover');
            $image_full_name = time().'_'.$photo->id.$request->album_id.'.'.$thumbnail->getClientOriginalExtension();
            $upload_path = 'images/frontimages/album/';
            $image_url = $upload_path.$image_full_name;
            $success = $thumbnail->move($upload_path, $image_full_name);
            $photo->cover = $image_url;
        }
        $photo->album_id = $request->album_id;
        $photo->save();

        return redirect()->route('albums.show', $request->album_id)->with(['status'=> 200, 'message' => 'Photo added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->back()->with(['status'=> 200, 'message' => 'Photo deleted!']);
    }
}
