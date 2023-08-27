<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of( Album::query())->addIndexColumn()->make(true);
        }

        return view('dashboard.gallaries.index');
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
    public function store(StoreAlbumRequest $request)
    {

        $album = new Album;
        $album->name = $request->name;
        $album->save();



        return redirect()->route('albums.index')->with(['status'=> 200, 'message' => 'Album Created!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('dashboard.gallaries.show',compact('album'));
    }


    /**
     * Display the specified resource.
     */
    public function allphotos()
    {
        $photos = Photo::all();
        return view('dashboard.gallaries.allphotos',compact('photos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        return view('dashboard.gallaries.albumedit',compact('album'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlbumRequest $request, Album $album)
    {
        $album->name = $request->name;
        $album->update();

        return redirect()->route('albums.index')->with(['status'=> 200, 'message' => 'Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return response()->json(['status' => 'success', 'message' => 'Album deleted successfully!'], 200);
    }
}
