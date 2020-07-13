@extends('layouts.app')
@section('content')
	<div class="container-fluid app-body">
		<h3>Recent Posts Sent To Buffer </h3>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover social-accounts">
					<thead>
					<tr>
						<th>Group Name</th>
						<th>Group Type</th>
						<th>Account Name</th>
						<th>Post Text</th>
						<th>Time</th>
					</tr>
					</thead>
					<tbody>
					@foreach($buffer_posts as $buffer_post)
						<tr>
							<td>{{$buffer_post->groupInfo->name}}</td>
							<td>{{$buffer_post->groupInfo->type}}</td>
							<td width="150">
								<div class="media" style="text-align: center">
									<div class="media-left">
										<a href="">
											<span class="fa fa-{{$buffer_post->accountInfo->type}}"></span>
											<img width="50" class="media-object img-circle" src="{{$buffer_post->accountInfo->avatar}}" alt="">
										</a>
									</div>
								</div>
							</td>
							<td>{{$buffer_post->post_text}}</td>
							<td>{{$buffer_post->sent_at}}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				{{$buffer_posts->links()}}
			</div>
		</div>
	</div>
@endsection
