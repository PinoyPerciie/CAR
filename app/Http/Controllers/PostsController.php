<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

// class PostsController extends Controller
// {
//     public function index()
//     {

//         $id = 1;
//         $posts = DB::table('posts')
//             ->where('id', '=', 15)
//             ->delete();

//             dd($posts);


//         $id = 2;
//         $posts = DB::table('posts')
//             ->where('id', '=', 15)
//             ->update([
//                 'title' => 'New Title', 'body' => 'Updated Body'
//             ]);
//             dd($posts);



//         $id = 1;
//         $posts = DB::table('posts')
//             ->insert([
//                 'title' => 'New Post', 'body' => 'New Body'
//             ]);
//             dd($posts);




//        $id = 1;

//          $posts = DB::table('posts')
//            ->orderBy('title', 'asc')
//            ->get();

//            dd($posts);

//        $posts = DB::table('posts')
//        ->select('title')
//        ->distinct()
//        ->get();

//         dd($posts);



//      public function index()
//     {
//         return view('posts/index');
//     }

//     }




// }
