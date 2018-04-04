@extends('layouts.app')

@section('content')
    <div class="container">
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/js.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/addingInput.js')}}"></script>
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


                                <div id='TextBoxesGroup'>
                                    <div id="TextBoxDiv1">
                                        <h3>Category #1:</h3><input type="text" name="category[]" class="form-control"/>
                                        Percentage<input type="text" name="percentage[]" class="form-control"/>

                                    </div>
                                </div>
                                <input type='button' value='Add Category' id='addButton'>
                                <input type='button' value='Remove Category' id='removeButton'>


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

@push('scripts')



@endpush

