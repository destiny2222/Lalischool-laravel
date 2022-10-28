<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teach = Teacher::orderBy("id", 'desc')->paginate(3);
        return view('admin.teacher.index', compact('teach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
        //
        if($request->createNewTeacher()){
            Alert::success('success', 'Successful Added');
            return redirect(\route('teacher.index'));
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
            $teach = Teacher::findOrFail($id);
            Alert::success('success', 'Edited Success');
            return view('admin.teacher.edit', compact('teach'));
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
            $teach = Teacher::findOrFail($id);
            $teach->update([
              'name'=>$request->input('name'),
              'position'=>$request->input('position'),
              'body'=>$request->input('body'),
              'image'=>update_image('teacher_image',$teach->image , 'image'),
            ]);
            Alert::success('success', 'Updated Successful');
            return redirect(route('teacher.index'));
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
            $teach = Teacher::findOrFail($id);
            $teach->delete();
            Alert::success('success', 'Delete Successfully');
            return redirect()->route('teacher.index');
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            Alert::error('error', 'Something Went Worry');
            return back();
        }
    }
}
