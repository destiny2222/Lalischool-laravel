<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $event = Event::orderBy("id", "desc")->paginate(3);
        return view('admin.event.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        //
        if($request->createNewEvent()){
            Alert::success('success','new event added');
            return redirect(route('programs.index'));
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
            $event = Event::findOrFail($id);
            Alert::success('success', 'Edited Success');
            return view('admin.event.edit', compact('event'));
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
            $event = Event::findOrFail($id);
            $event->update([
              'title'=>$request->input('title'),
              'event_data'=>$request->input('event_data'),
              'event_time'=>$request->input('event_time'),
              'location'=>$request->input('location'),
              'slug'=>Str::slug($request->input('title')),
              'body'=>$request->input('body'),
              'image'=>update_image('event_image',$event->image , 'image'),
            ]);
            Alert::success('success', 'Updated Successful');
            return redirect(route('programs.index'));
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
            $event = Event::findOrFail($id);
            $event->delete();
            Alert::success('success', 'Delete Successfully');
            return redirect()->route('programs.index');
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            Alert::error('error', 'Something Went Worry');
            return back();
        }
    }
}
