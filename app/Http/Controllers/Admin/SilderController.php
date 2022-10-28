<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SilderRequest;
use App\Models\Silder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class SilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slide = Silder::orderBy("id", "desc")->paginate(3);
        return view('admin.slider.index', compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SilderRequest $request)
    {
        //
        if($request->createSilder()){
            Alert::success('success','Successful Added');
            return redirect(route('silder.index'));
        }
        // return redirect()->with('error', 'An error occurred!');
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
            $slide = Silder::findOrFail($id);
            Alert::success('success', 'Edited Success');
            return view('admin.slider.edit', compact('slide'));
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
            $slide = Silder::findOrFail($id);
            $slide->update([
              'title'=>$request->input('title'),
              'links'=>$request->input('links'),
              'subtitle'=>$request->input('subtitle'),
              'body'=>$request->input('body'),
              'image'=>update_image('silder_image',$slide->image , 'image'),
            ]);
            Alert::success('success', 'Updated Successful');
            return redirect(route('silder.index'));
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
            $slide = Silder::findOrFail($id);
            $slide->delete();
            Alert::success('success', 'Delete Successfully');
            return redirect()->route('silder.index');
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            Alert::error('error', 'Something Went Worry');
            return back();
        }
    }
}
