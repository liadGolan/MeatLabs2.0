<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('home',compact('posts'));
    }

    public function post(Request $request)
    {
        $input = [
            'title'   => $request['title'],
            'content' => $request['content']
        ];

        $rules = [
            'title'   => 'required',
            'content' => 'required'
        ];

        $validator = Validator::make($input, $rules);

        if($validator->passes()) {
            $user = Auth::user();
            Post::create([
                'title'      => $input['title'],
                'content'    => $input['content'],
                'author'     => $user->name
            ]);
            $posts = Post::all();
            return view('home', compact('posts'));
        } else {
            $posts = Post::all();
            return view('home', compact('posts'));
        }
    }
}
