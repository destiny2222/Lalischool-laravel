<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tag = Tag::select('id', 'name')->get();
        $blog = Blog::orderBy("id", "desc")->paginate(3);
        return view('admin.post.blog', compact('blog', 'tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tag = Tag::select('id', 'name')->get();
        return view('admin.post.blog', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        //
        if($request->createNewBlog()){
            Alert::success('success','new blog added');
            return redirect(route('posts.index'));
            // return redirect(route('blog.index'))->with('status', 'Successfully add new BLog');
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
        // return view('')
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
            $blog = Blog::findOrFail($id);
            Alert::success('success', 'Edited Success');
            return view('admin.post.blog-edit', compact('blog'));
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
          $blog = Blog::findOrFail($id);
          $blog->update([
            'title'=>$request->input('title'),
            'author'=>$request->input('author'),
            'body'=>$request->input('body'),
            'slug'=>Str::slug($request->input('title')),
            'image'=>update_image('blogger',$blog->image , 'image'),
          ]);
          Alert::success('success', 'Updated Successful');
          return redirect(route('posts.index'));
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
            $blog = Blog::findOrFail($id);
            $blog->delete();
            Alert::success('success', 'Delete Successfully');
            return redirect()->route('posts.edit');
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            Alert::error('error', 'Something Went Worry');
            return back();
        }
    }
}
