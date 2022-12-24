<?php

namespace App\Http\Controllers\Users;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisteredController extends Controller
{
    public function create() {

        $roles = Role::all();
        return view('dashboard.users.create', compact('roles'));
    }

    public function store(Request  $request) {
        {
            $data = $request->input();
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                 'role_id' =>$data['role_id'],
                'password' => Hash::make($data['password']),
            ]);
    }

    return redirect()->route('users.liste');
}

public function edit($id) {
    $ressource  = User::find($id);
    $roles = Role::all();
    return view('dashboard.users.edit', compact('ressource', 'roles'));
}

public function destroy($id) {
    $ressource  = User::find($id);
    $ressource->delete();
 return  redirect()->back();
}




public function liste() {
    $roles = Role::all();
    $ressourcesUsers = User::paginate(20);
    return view('dashboard.users.liste', compact('ressourcesUsers', 'roles'));
}


public function update(Request $request , $id) {
    $ressource  = User::find($id);
    $ressource->name =  $request->input('name');
    $ressource->email  = $request->input('email');
     $ressource->role_id = $request->input('role_id');
     $ressource->password = Hash::make($request->input('password'));
     $ressource->update();
      return redirect()->route('users.liste');


}

}
