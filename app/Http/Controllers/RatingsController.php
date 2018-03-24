<?php

namespace App\Http\Controllers;

use App\Standing;
use App\Subject;
use Illuminate\Http\Request;
use App\Rating;
use App\Grade;
use Auth;

class RatingsController extends Controller
{

    public function index()
    {


        $ratings = Subject::all();
        return view('ratings.index', compact('ratings'));


    }


    public function create()
    {

        $posts = Subject::all();
       return view('ratings.create', compact('posts'));
    }

    public function store(Request $request)
    {

        $subject = new Subject;
        $subject->subject_id = $request->input('subject_id');
        $subject->user_id = Auth::user()->id;
        $subject->name = $request->input('name');
        $subject->save();


        $subjectId = $request->input('subject_id');

        $categoryArray = $request->input('category');
        $percentageArray = $request->input('percentage');



        if(count($categoryArray) > count($percentageArray))
            $count = count($categoryArray);
        else $count = count($percentageArray);


        $items = array();
        for($i = 0; $i < $count; $i++){


            $item = array(

                'subject_id' => $subjectId,
                'category' => $categoryArray[$i],
                'percentage' => $percentageArray[$i]
            );
            $items[] = $item;

        }

        Rating::insert($items);


        return redirect('/ratings');
    }


    public function show($subject_id)
    {

        $pota = Subject::where('subject_id', '=', $subject_id)->get()->first();
        $categories = Rating::where('subject_id', '=', $subject_id)->get();
        $post = Rating::where('subject_id','=',$subject_id)->get()->first();

        return view('ratings.show', compact('post', 'categories', 'pota'));

    }

    public function edit($subject_id)
    {

        $rating = Rating::where('subject_id','=',$subject_id)->get()->first();
        $pota = Subject::where('subject_id', '=', $subject_id)->get()->first();
        $categories = Rating::where('subject_id', '=', $subject_id)->get();
        $standing = Standing::all();



       return view('ratings.edit', compact('rating', 'categories', 'pota', 'standing'));

    }

    public function update(Request $request, $subject_id)
    {

        $standing_id = $request->input('standing_id');
        $categoryArray = $request->input('category');
        $scoreArray = $request->input('score');
        $totalArray = $request->input('total');
        $percentageArray = $request->input('percentage');



        $count = count($categoryArray);


        $items = array();
        for($i = 0; $i < $count; $i++){


            $item = array(

                'subject_id' => $subject_id,
                'standing_id' => $standing_id,
                'category' => $categoryArray[$i],
                'score' => $scoreArray[$i],
                'total' => $totalArray[$i],
                'user_id' => Auth::user()->id,
            );
            $items[] = $item;
        }


        Grade::insert($items);

        $standing = new Standing;
        $standing->subject_name = $request->input('subject_name');

        for($i = 0; $i < $count; $i++){

            $standing->overall += ((($scoreArray[$i]/$totalArray[$i])*($percentageArray[$i]/100)) * 100);
        }

        if(($standing->overall<=100) and ($standing->overall>95)){
            $standing->status="1.0";
        }
        elseif(($standing->overall<=95) and ($standing->overall>90)){
            $standing->status="1.25";
        }
        elseif(($standing->overall<=90) and ($standing->overall>85)){
            $standing->status="1.5";
        }
        elseif(($standing->overall<=85) and ($standing->overall>80)){
            $standing->status="1.75";
        }
        elseif(($standing->overall<=80) and ($standing->overall>75)){
            $standing->status="2.0";
        }
        elseif(($standing->overall<=75) and ($standing->overall>70)){
            $standing->status="2.25";
        }
        elseif(($standing->overall<=70) and ($standing->overall>65)){
            $standing->status="2.5";
        }
        elseif(($standing->overall<=65) and ($standing->overall>60)){
            $standing->status="2.75";
        }
        elseif(($standing->overall<=60) and ($standing->overall>55)){
            $standing->status="3.0";
        }
        elseif(($standing->overall<=55) and ($standing->overall>50)){
            $standing->status="4.0";
        }
        else{
            $standing->status="5.0";
        }

        $standing->subject_id = $subject_id;
        $standing->user_id = Auth::user()->id;
        $standing->save();




        return redirect('/ratings');

    }


    public function destroy($subject_id)
    {
        $rating = Rating::where('subject_id','=',$subject_id)->get()->first();
        $rating->delete();

        return redirect('/ratings');
    }

}
