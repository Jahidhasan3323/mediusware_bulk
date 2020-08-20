<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BufferPosting;
use App\SocialPostGroups;
class PostController extends Controller
{
    public function index()
    {
        
		/*retrive post data*/
        $data['posts']=BufferPosting::with('groupInfo','accountInfo')->orderby('id','DESC')->paginate(10);
        /*retrive groups data*/
        $data['groups']=SocialPostGroups::groupby('type')->get();
        return request()->json(200, $data);
    }

    public function post_search(Request $request)
    { 
            $query=BufferPosting::with('groupInfo','accountInfo');
            /*check if any search data insert*/
            if($request->search){
                $query->where('post_text','like', '%'. $request->search . '%');
            }
            /*filter if any date select*/
            if($request->date){
                $query->whereDate('sent_at','=',$request->date);
            }
            /*filter if any group select*/
            if($request->group_id){
                $query->where('group_id',$request->group_id);
            }
            /*filter and retrive all data*/
            $data['posts']=$query->orderby('id','DESC')->paginate(10);
            $data['groups']=SocialPostGroups::groupby('type')->get();
            return request()->json(200, $data);
    }
}
