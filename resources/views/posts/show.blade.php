@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading namespan">


				</div>
				<div class="panel panel-default temp">
					<div class="panel-body subjecttable">
	                    <h3>Subject: {{ $standing->subject_name }}</h3>
	                    <hr id="hrmini" />



	                    <table id="results">
							@foreach($catingSum as $posts)
								<tr>
									<td><p>{{$posts->category}}</p></td>

									<td><p>{{ round(($posts->sum*100)/$posts->total,2) }}%</p></td>
								</tr>
							@endforeach

	                    </table>

	                    <h3 id="total">Total: {{$standing->overall}} %</h3>
	                    <hr id="hrmini" />
                        <h3>Status: {{$standing->status}}</h3>
	                </div>
				</div>
				<div class="panel-footer" style="display: flex;">
					{{--<form action="{{route('posts.edit', $post->id)}}" method="post">--}}
						{{--{{ method_field('edit')}}--}}
						{{--{{ csrf_field() }}--}}
						{{--<button class="btn showbtn"><a href="{{route('posts.edit', $post->id)}}">Edit</a></button>--}}
					{{--</form>--}}
					{{--</a>--}}
					{{--<form action="/posts/{{ $post->id }}" method="post">--}}
						{{--{{ method_field('delete')}}--}}
						{{--{{ csrf_field() }}--}}
						{{--<button class="btn showbtn">Delete</button>--}}
					{{--</form>--}}
				</div>
			</div>
		</div>
	</div>
@endsection