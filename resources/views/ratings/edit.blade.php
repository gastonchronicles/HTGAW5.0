@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-group" action="/ratings/{{ $rating->subject_id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}


                            <input type="hidden" name="standing_id" value="{{($standing->count())+1}}" class="form-control"/>
                            <h3>{{$rating->subject_id}} : Subject: {{ $pota->name }}</h3>
                            <input type="hidden" name="subject_id" class="form-control" value="{{$rating->subject_id}}"/>



                            @foreach($categories as $posts)
                                <hr>
                                <input type="hidden" name="category[]" value="{{$posts->category}}" />
                                <h1> {{$posts->category}} ----- {{$posts->percentage}}%</h1>
                                Score<input type="text" name="score[]" class="form-control"/>
                                Total Score<input type="text" name="total[]" class="form-control"/>
                                <input type="hidden" name="percentage[]" value="{{$posts->percentage}}"/>
                                <hr>
                            @endforeach
                            <input type="hidden" name="subject_name" value="{{$pota->name}}" />
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            <input type="submit" name="submit" value="Edit" class="btn btn-success pull-right" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection