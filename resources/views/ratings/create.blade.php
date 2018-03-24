@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body calcpanel">
                        <form action="/ratings" method="post">
                            {{ csrf_field() }}


                            <h2>Subject:</h2><input type="text" name="name" class="form-control"/>

                                <input type="hidden" name="subject_id" value="{{($posts->count())+1}}" class="form-control"/>

                            <hr />


                            <div class="col-sm-4" class="calcform">
                            <h3>First Category:</h3><input type="text" name="category[]" class="form-control"/>
                                Percentage<input type="text" name="percentage[]" class="form-control"/>


                            <h3>Second Category:</h3><input type="text" name="category[]" class="form-control"/>
                                Percentage<input type="text" name="percentage[]" class="form-control"/>


                            <h3>Third Category:</h3><input type="text" name="category[]" class="form-control"/>
                                Percentage<input type="text" name="percentage[]" class="form-control"/>


                            <h3>Fourth Category:</h3><input type="text" name="category[]" class="form-control"/>
                                Percentage<input type="text" name="percentage[]" class="form-control"/>


                            <h3>Fifth Category:</h3><input type="text" name="category[]" class="form-control"/>
                                Percentage<input type="text" name="percentage[]" class="form-control"/>



                            </div>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />


                            <input type="submit" id="submit" class="btn pull-right" value="Submit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection