<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ClassRoom;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Silder;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home(){
        $blog = Blog::orderBy('id', 'DESC')->take('3')->get();
        $classe = ClassRoom::orderBy('id', 'DESC')->take('3')->get();
        $galle = Gallery::orderBy('id', 'DESC')->take('3')->get();
        $silder = Silder::orderBy('id', 'desc')->get();
        $event = Event::orderBy('id', 'desc')->get();
        return view('page.index', compact('blog', 'silder', 'classe', 'galle','event'));
    }

}
