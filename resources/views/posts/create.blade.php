@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body calcpanel">
                        <form action="/posts" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />


                            <h2>Subject:</h2><input type="text" name="subject" class="form-control"/>


                            <hr />

                            <div class="col-sm-4" class="calcform">
                                <h3>Quiz:</h3><input type="text" name="quiz" class="form-control"/>

                                <h3>Assignment:</h3><input type="text" name="assignment" class="form-control"/>

                                <h3>Attendance:</h3><input type="text" name="attendance" class="form-control"/>

                                <h3>Long Exams:</h3><input type="text" name="longexams" class="form-control"/>

                                <h3>Final Exam:</h3><input type="text" name="finalexam" class="form-control"/>
                            </div>

                            <div class="col-sm-4" class="calcform">
                                <h3>Quiz Total:</h3><input type="text" name="quiztotal" class="form-control"/>

                                <h3>Assignment Total:</h3><input type="text" name="assignmenttotal" class="form-control"/>

                                <h3>Attendance Total:</h3><input type="text" name="attendancetotal" class="form-control"/>

                                <h3>Long Exams Total:</h3><input type="text" name="longexamstotal" class="form-control"/>

                                <h3>Final Exam Total:</h3><input type="text" name="finalexamtotal" class="form-control"/>
                            </div>




                            <input type="hidden" name="total" value="0"/>
                            <input type="hidden" name="status" value=" "/>

                            <input type="submit" id="calculate" class="btn pull-right" value="Calculate" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection