<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gallery = Gallery::orderBy("id", "desc")->paginate(3);
        return view('admin.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        //
        if($request->createGallery()){
            Alert::success('success','new gallery added');
            return redirect(route('gallery.index'));
        }
        Alert::error('error','An error occurred!');
        return back();
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
        try{
            $gallery = Gallery::findOrFail($id);
            Alert::success('success', 'Edited Success');
            return view('admin.gallery.edit', compact('gallery'));
        }catch(\Exception $exception){
            Log::info($exception->getMessage());
            Alert::error('error', 'Something went worry');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try{
            $gallery = Gallery::findOrFail($id);
            $gallery->update([
              'name'=>$request->input('name'),
            //   'event_data'=>$request->input('event_data'),
            //   'body'=>$request->input('body'),
              'image'=>update_image('gallery_image',$gallery->image , 'image'),
            ]);
            Alert::success('success', 'Updated Successful');
            return redirect(route('gallery.index'));
          }catch(\Exception $exception){
              Log::error($exception->getMessage());
              Alert::error('error', 'Oops something went wrong');
          }
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
        try {
            $gallery = Gallery::findOrFail($id);
            $gallery->delete();
            Alert::success('success', 'Delete Successfully');
            return redirect()->route('gallery.index');
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            Alert::error('error', 'Something Went Worry');
            return back();
        }
    }
}
