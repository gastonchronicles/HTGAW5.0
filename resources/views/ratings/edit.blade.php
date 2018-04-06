@extends('layouts.app')

@section('content')
    <div class="container">
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/js.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/addingCats.js')}}"></script>

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-group" action="/ratings/{{ $rating->subject_id }}" method="POST" id="editForm">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}


                            <input type="hidden" name="standing_id" value="{{($standing->count())+1}}" class="form-control"/>
                            <h3>{{$rating->subject_id}} : Subject: {{ $pota->name }}</h3>
                            <input type="hidden" name="subject_id" class="form-control" value="{{$rating->subject_id}}"/>



                            @foreach($categories as $posts)
                                <hr>
                                <input type="hidden" name="category[]" value="{{$posts->category}}" />


                                <h1> {{$posts->category_id }}. {{$posts->category}} ----- {{$posts->percentage}}%</h1>





                                {{--Score<input type="text" name="score[]" id="score" class="form-control" />--}}
                                {{--Total Score<input type="text" name="total[]" id="total" class="form-control"/>--}}



                                <div id='TextBoxesGroup_{{$posts->category}}'>


                                    <div id="TextBoxDiv1">

                                        {{--<input type="hidden" id="score" name="score[]" value="" class="score"/>--}}
                                        {{--Score<input type="text" name="score[]" class="form-control"/>--}}
                                        {{--Total Score<input type="text" name="total[]" class="form-control"/>--}}
                                        {{--<input type="hidden" name="ninja" value="{{$posts->category}}_1"/>--}}

                                    </div>
                                </div>


                                <button type="button" id = "addButton_{{$posts->category}}"  class="btn addButton" data-cat ="cat_{{$posts->category_id}}">Add Score</button>
                                <button type="button" class="btn removeButton">Remove Score</button>








                                <input type="hidden" name="percentage[]" value="{{$posts->percentage}}"/>
                                <hr>
                            @endforeach

                            <input type="hidden" name="subject_name" value="{{$pota->name}}" />
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            <input type="submit" name="submit" value="Calculate" class="btn" id="editCalcBtn"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

