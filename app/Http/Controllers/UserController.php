<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function index ()
{
  $users = User::get();


return view('users.clientarea',compact ('users'));
}

public function show ($id)
{
    // $user = User::where ('id','=', $id)->first();
   if (!$user =User::find($id))
   return redirect()->route('users.clientarea');

   return view('users.show', compact('user'));
}

public function create ()
{
    return view('users.create');

}

public function store (Request $request)
{
   dd($request->all());
}
}