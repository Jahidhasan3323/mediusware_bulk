@extends('main_layout')
@section('mainContent')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
							<li class="breadcrumb-item active">Post</li>
						</ol>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Recent Post Sent To Buffer</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<form class="form-inline" method="get" action="{{route('post.search')}}">
			                        <div class="col-md">
			                            <div class="form-group">
			                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Search Post ..." name="search">
			                            </div>
			                        </div>
			                        <div class="col-md">
			                            <div class="form-group">
			                                <input type="date" class="form-control" id="exampleInputEmail1" placeholder="date" name="date">
			                            </div>
			                        </div>
			                        <div class="col-md">
			                            <div class="form-group">
			                                <select class="form-control select2" name="group">
			                                  <option value="">select</option>
			                                  @foreach($groups as $group)
			                                  <option value="{{$group->id}}">{{$group->name}}</option>
			                                  @endforeach
			                                  
			                                </select>
			                            </div>
			                        </div>
			                        <!-- <div class="col-md">
			                            <div class="form-group">
			                                <button type="submit" class="btn btn-success">Submit</button>
			                            </div>
			                        </div> -->
			                    </form>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<table class="table table-bordered">
								    <tr class="thead-light">
								        <th style=" width: 28%">Group Name</th>
								        <th style="text-align: center; width: 12%">Group Type</th>
								        <th style="text-align: center; width: 10%">Account Name</th>
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
								<div id="app">
					                <example-component></example-component>
					            </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection