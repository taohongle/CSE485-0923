<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $artworks = Artwork::all();
        $artworks = Artwork::orderBy('created_at', 'desc')->get();
        return view('artworks.index',compact('artworks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $artwork = new Artwork(); // Khởi tạo đối tượng Artwork
        // $artwork->art_type = 'default_value'; // Gán giá trị mặc định cho art_type
        return view('artworks.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artwork = Artwork::create($request->all());
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $imageName = $image->getClientOriginalName();
            $imagePath = public_path('images/');
            $image->move($imagePath, $imageName);
            $artwork->cover_image = $imageName;
            $artwork->save();
        }
        return redirect()->route('artworks.index')->with('thongbao','Thêm nghệ sĩ thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artwork $artwork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artwork $artwork)
    {
        // $artworkOptions = Artwork::all();
        return view('artworks.edit',compact('artwork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artwork $artwork)
    {
        $artwork->update($request->all());
        return redirect()->route('artworks.index')->with('thongbao','Sửa nghệ sĩ thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artwork)
    {
        $artwork->delete();
        return redirect()->route('artworks.index')->with('thongbao','Xoá nghệ sĩ thành công!');
    }
}
