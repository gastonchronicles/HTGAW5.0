@extends('layouts.app')


@section('content')
	<div class="row">
		<div id="profpicdiv">
			<img class="col-md-3 col-md-offset-1 profile-img" src="/img-uploads/profile-pic.png">
		</div>
		<div class="col-md-12">
			<div class="panel panel-default text-center contentstripe">
				<div class="panel-body">
					<div class="col-md-8 col-md-offset-4 profileinfo">
						<h1>{{ $user->name }} <i>({{ $user->username }})</i></h1>
						<h2>{{$user->position}}</h2>
						<hr />
						<h4>{{ $user->email }}</h4>
						<h4>{{ $user->bdate->format('l j F Y') }} ({{ $user->bdate->age}} years old)</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection