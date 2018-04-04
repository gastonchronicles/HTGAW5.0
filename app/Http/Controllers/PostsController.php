<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Standing;
use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\Cat;

use App\Users;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Standing::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {

        return redirect('/posts');
    }


    public function show($id)
    {

        $pota = Standing::where('id', '=', $id)->get()->first();

        $categories = Grade::where('standing_id', '=', $id)->get();
        $post = Grade::where('standing_id','=',$id)->get()->first();


        $catingSum = DB::table('grades')
            ->groupBy('category')
            ->selectRaw('*, sum(score) as sum ,sum(total) as total')
            ->where('standing_id', '=', $id)
            ->get();

//        dd($catingSum);




//             foreach($catingSum as $kuring) {
//            $hello = $kuring->sum;
//            $hello2 = $kuring->total;
//        }


//            dd($hello,$hello2);


//        $catingSum2 = DB::table('cats')
//            ->groupBy('cats_name')
//            ->selectRaw('*, sum(tTotal) as total')
//            ->get();


//
//        dd($catingSum);




        //query group by eloquent
        //query unique category names group
        //unique cat. query and total,
        //laravel eloquent sum group by
// $sum = Sum(cat:: weger )
        //grou pby the category name categroy id.
        //unique names
        //where subject id is.


//        $sum = 5+5+5= 15





        return view('posts.show', compact('post', 'categories','pota', 'catingSum'));
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect('/posts/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();

        return redirect('/posts');
    }


}
