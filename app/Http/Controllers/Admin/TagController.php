<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
{
    //

    public function index(){
        $tag = Tag::orderBy("id", "desc")->get();
        return view('admin.Tag.index', compact('tag'));
    }

    public function create(){
        return view('admin.Tag.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required'
        ]);

        try{
            Tag::create([
                'name'=>$request->input('name'),
                'slug'=>$request->input('name'),
            ]);
            Alert::success('success', 'Tag successfully added!');
            return back();
        }catch(\Exception $exception){
            Log::info($exception->getMessage());
            Alert::error('error', 'Oops something went worry');
            return back();
        }
        
    }

    public function show(){
    
    }

    public function edit(Tag $tag){
        return view('admin.blog-edit',[
            'tag'=>$tag
        ]);
    }

    public function update(Request $request, $id){
        try {
            $tag = Tag::findOrFail($id);
            $tag->update([
               'name'=>$request->input('name'),
                'slug'=>$request->input('name'),
            ]);
            Alert::success('success', 'Successfuly updated');
           return back();
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            // return back()->with('error','Error!');
            Alert::error('error', 'Something went worry');
        }
    }

    public function destroy($id)
    {
        //
        try {
            $tag = Tag::findOrFail($id);
            $tag->delete();
            Alert::success('success', 'Delete Successfully');
            return back();
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            Alert::error('error', 'Something Went Worry');
            return back();
        }
    }
}


