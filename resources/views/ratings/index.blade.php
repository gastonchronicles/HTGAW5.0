@extends('layouts.app')


@section('content')
    <div class="row">

        @forelse($ratings as $post)
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading namespan">
                        <span>By: {{ $post->user->name }}</span>
                    </div>
                    <div class="panel-body panel-default postpanel">
                        <span><h2>{{$post->name}}</h2> <a href="/ratings/{{ $post->subject_id }}">View Rating</a>
						</span>
                    </div>
                </div>
            </div>
    </div>

    @empty
        No results found
    @endforelse
    <div class="col-md-6 col-md-offset-3">

    </div>
    </div>
@endsection