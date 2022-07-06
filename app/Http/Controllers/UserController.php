<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
public function index ()
{

  $users = User::get();


return view('users.userslist',compact ('users'));
}

public function show ($id)
{
    // $user = User::where ('id','=', $id)->first();
   if (!$user =User::find($id))
   return redirect()->route('users.userslist');

   return view('users.show', compact('user'));
}

public function create ()
{
    return view('users.create');

}

public function store (UpdateUserFormRequest $request)
{
   $data = $request->all();
   $data ['password'] = bcrypt($request->password);

   $user = User::create($data);

   return redirect()->route('users.userslist');
}

public function edit($id)
{
  if (!$user = User::find($id))
    return redirect()->route('users.edit');

    return view('users.edit', compact('user'));
}

public function update(Request $request, $id)
{
  if (!$user = User::find($id))
    return redirect()->route('users.userslist');

    $data = $request->only('name', 'email','username');
    if ($request->password)
    $data['password'] = bcrypt($request->passoword);

    $user->update($data);

    return redirect()->route('users.userslist');
  }

  public function destroy($id)
{
    // $user = User::where ('id','=', $id)->first();
   if (!$user =User::find($id))
   return redirect()->route('users.destroy');


$user->delete();

return redirect()->route('users.userslist');
}
}
