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


                            <h2>Subject:</h2><input type="text" id="name" name="name" class="form-control" required />


                                <input type="hidden" name="subject_id" value="{{($posts->count())+1}}" class="form-control"/>
                            @foreach($posts as $post)
                            <input type="hidden" name="listOfSubjects[]" value="{{$post->name}}" />
                            @endforeach

                            <hr />



                            <div id='TextBoxesGroup'>
                                <div id="TextBoxDiv1" class="calcform">

                                    <h3>Category #1:</h3><input type="text" name="category[]" class="form-control" placeholder="Category Name"  required/>
                                    <h4>Percentage # 1</h4><input id="percentage" type="text" name="percentage[]" class="form-control" placeholder="Enter a number" required/>

                                </div>
                            </div>


                            <div class="calcBtnHolder">
                                <input type='button' value='Add Category' id='addButton' class="btn calcBtn">
                                <input type='button' value='Remove Category' id='removeButton' class="btn calcBtn">
                            </div>


                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />


                            <input type="submit" id="submit" class="btn" value="Submit" onclick="return myFunction()"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')



@endpush

