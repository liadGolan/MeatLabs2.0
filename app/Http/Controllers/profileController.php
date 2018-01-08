<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class profileController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('profile', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit', compact('user', 'id'));
    }

    public function newBio(Request $request, $id)
    {

        $input = [
            'bio' => $request['bio']
        ];

        $rules = [
            'bio' => 'string|required'
        ];

        $validator = Validator::make($input,$rules);
        if($validator->passes())
        {
            $user = User::find($id);
            $user->bio = $input['bio'];
            $user->save();
            return view('profile', compact('user'));
        }
        else
        {
            $user = User::find($id);
            return view('edit', compact('user'));
        }
    }
}
