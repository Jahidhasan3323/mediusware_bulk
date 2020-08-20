<?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;
use Bulkly\BufferPosting;
use Bulkly\SocialPostGroups;
class PostController extends Controller
{
    public function index()
    {
		/*retrive post data*/
        $posts=BufferPosting::with('groupInfo','accountInfo')->orderby('id','DESC')->paginate(10);
        $groups=SocialPostGroups::get();
        return view('post.index',['posts'=>$posts,'groups'=>$groups]);
    }

    public function post_search(Request $request)
    {

    	$query=BufferPosting::with('groupInfo','accountInfo');
        if($request->search){
            $query->where('post_text','like', '%'. $request->search . '%');
        }
        if($request->date){
            $query->whereDate('sent_at','=',$request->date);
        }
        if($request->group){
        	//return $request->group;
            $query->whereDate('group_id','=',(int)$request->group);
        }
		/*retrive post data*/
        $posts=$query->orderby('id','DESC')->paginate(10);
        $groups=SocialPostGroups::get();
        //dd($posts);
        return view('post.index',['posts'=>$posts,'groups'=>$groups]);
    }
}
