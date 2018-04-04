@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading namespan">
					{{--<span>{{$post->user->name }}'s <b>{{$pota->subject_name}}</b> grade</span>--}}

				</div>
				<div class="panel panel-default temp">
					<div class="panel-body subjecttable">
	                    <h3>Subject: {{ $pota->subject_name }}</h3>
	                    <hr id="hrmini" />



	                    <table>
							@foreach($catingSum as $posts)
								<tr>
									<td><p>{{$posts->category}}</p></td>

									<td><p>{{ ($posts->sum*100)/$posts->total }}%</p></td>
								</tr>
							@endforeach

							{{--@foreach($catingSum as $posts)--}}
							{{--<tr>--}}
							{{--<td><p>{{$posts->category}}</p></td>--}}

							{{--<td><p>{{ ($posts->score*100)/$posts->total }}%</p></td>--}}
							{{--</tr>--}}
							{{--@endforeach--}}

							{{--@foreach($catingSum as $kuring)--}}
								{{--{{$kuring->sum}} ---- {{$kuring->total}}--}}

								{{--@endforeach--}}


	                    </table>

	                    <h3>Total: {{$pota->overall}} %</h3>
	                    <hr id="hrmini" />
                        <h3>Status: {{$pota->status}}</h3>
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