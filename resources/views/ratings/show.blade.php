@extends('layouts.app')
    @section('content')


            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">

                        <a href="/ratings" class="btn back">Back</a>

                        <div class="panel-heading namespan">
                            <h1>Subject: {{ $subject->name }}</h1>

                        </div>

                        <div class="panel panel-default temp">
                            <div class="panel-body subjecttable">


                                <span><h2>Grading System:</h2></span>
                                <input type="hidden" name="subject_id" class="form-control" value="{{$post->subject_id}}"/>


                            @foreach($categories as $posts)

                                    <tr>
                                        <td><h3>{{$posts->category}} = {{$posts->percentage}}%</h3></td>

                                    </tr>



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



