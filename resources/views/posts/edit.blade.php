@extends('layouts.app')


@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel-body panel-default">
				<form id="contain" action="/posts/">
                    <h1>Edit Subject</h1>
					{{ csrf_field() }}
					{{method_field('PUT')}}
					
						{{--<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />--}}
						{{--<!--<textarea name="content" class="form-control">{{ $post->content }}</textarea>-->--}}
                         <h2>Subject:</h2><input type="text" name="subject" class="form-control" value="{{$post->subject}}"/>
                    
                        <h3>Quiz:</h3><input type="text" name="quiz" class="form-control" value="{{$post->quiz}}"/>

                        <h3>Quiz Total:</h3><input type="text" name="quiztotal" class="form-control" value="{{$post->quiztotal}}"/>

                        <h3>Assignment</h3><input type="text" name="assignment" class="form-control" value="{{$post->assignment}}"/>

                        <h3>Assignment Total</h3><input type="text" name="assignmenttotal" class="form-control" value="{{$post->assignmenttotal}}"/>

                        <h3>Attendance</h3><input type="text" name="attendance" class="form-control" value="{{$post->attendance}}"/>

                        <h3>Attendance Total</h3><input type="text" name="attendancetotal" class="form-control" value="{{$post->attendancetotal}}"/>

                        <h3>Long Exams</h3><input type="text" name="longexams" class="form-control" value="{{$post->longexams}}"/>

                        <h3>Long Exams Total</h3><input type="text" name="longexamstotal" class="form-control" value="{{$post->longexamstotal}}"/>

                        <h3>Final Exam</h3><input type="text" name="finalexam" class="form-control" value="{{$post->finalexam}}"/>

                        <h3>Final Exam Total</h3><input type="text" name="finalexamtotal" class="form-control" value="{{$post->finalexamtotal}}"/>
						
                        <input type="hidden" name="total" value="{{$post->total}}"/>
                        
                        <input type="hidden" name="status" value=" {{$post->status}}"/>    
                        
                        <br/>
                        <input type="submit" class="btn btn-success pull-right" value="Submit" />      
                </form>
			</div>
		</div>
	</div>
@endsection


//