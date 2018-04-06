@extends('layouts.app')
    @section('content')


            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">

                        <a href="/ratings" class="btn back">Back</a>

                        <div class="panel-heading namespan">
                            <span><h2>Grading System:</h2></span>
                        </div>

                        <div class="panel panel-default temp">
                            <div class="panel-body subjecttable">

                                <h3>{{$post->subject_id}} : Subject: {{ $pota->name }}</h3>

                                <input type="hidden" name="subject_id" class="form-control" value="{{$post->subject_id}}"/>


                            @foreach($categories as $posts)
                                    <hr>
                                    <h1> {{$posts->category}} ----- {{$posts->percentage}}%</h1>

                                    <hr>
                                @endforeach
                            </div>


                            <div class="panel-footer clearfix" style="background-color: #fff;" id="showBtns">
                                <a class="btn" href="/ratings/{{ $post->subject_id }}/edit">Calculate <span class="glyphicon glyphicon-pencil"></span></a>
                                <form class="form-delete" action="/ratings/{{ $post->subject_id }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" class="btn" value="Delete" id="delete"/>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

@endsection



