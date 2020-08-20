<?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;
use Bulkly\BufferPosting;
class PostController extends Controller
{
    public function index()
    {
		/*retrive post data*/
        $posts=BufferPosting::with('groupInfo','accountInfo')->get();
        return view('post.index',['posts'=>$posts]);
    }
}
