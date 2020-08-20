@extends('layouts.app')
@section('content')
    <div class="container-fluid app-body app-home">
      <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default channel-activity">
                <div class="panel-heading">
                    <h4>Recent Post Sent To Buffer</h4>
                </div>
                <div class="panel-body">
                    <form method="get" action="{{route('post.search')}}">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Search Post ..." name="search">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="date" class="form-control" id="exampleInputEmail1" placeholder="date" name="date">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control select2" name="group">
                                  <option value="">select</option>
                                  @foreach($groups as $group)
                                  <option value="{{$group->id}}">{{$group->name}}</option>
                                  @endforeach
                                  
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered">
                        <tr class="active">
                            <th style=" width: 30%">Group Name</th>
                            <th style="text-align: center; width: 12%">Group Type</th>
                            <th style="text-align: center; width: 8%">Account Name</th>
                            <th>Post Text</th>
                            <th style="text-align: center; width: 15%">Time</th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->groupInfo->name}}</td>
                                <td style="text-align: center">{{$post->groupInfo->type}}</td>
                                <td style="text-align: center"><img src="{{$post->accountInfo->avatar}}" height="50px" width="50px" style="border-radius: 50%"></td>
                                <td>{{$post->post_text}}</td>
                                <td style="text-align: center;">{{date_format(date_create($post->sent_at),'d M Y h i a')}}</td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="pull-right">
                        
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection