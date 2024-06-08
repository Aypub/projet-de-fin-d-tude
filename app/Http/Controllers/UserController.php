<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        
        $request->validate([
            'Name' => 'required|string|max:255',
            'Telephone' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255',
            'Role' => ['required',Rule::in(['admin','agent'])],
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            
            
        ]);
        
        $dpassword= 'azer1234';

        $user = new User();
    $user->name = $request->Name;
    $user->email = $request->Email;
    $user->password = bcrypt($dpassword);
    $user->telephone = $request->Telephone;
    $user->role = $request->Role;
    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $imageName = time().'.'.$image->extension();
        $image->storeAs('public/images', $imageName); 
        $user->photo = $imageName;
    }


    $user->save();


        return redirect()->back()->with('success', 'User created successfully.');
    }

    public function Afficher(){
        $User = User::all();
        return view('admin.gestion_agent', compact('User'));
    }
    public function AfficherProfile(){
        $User = User::all();
        return view('admin.profile', compact('User'));
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully');
    }
    public function edit(String $id)
    {
        $user = User::findOrFail($id);
        return view('admin.Edit',compact('user'));
    }
    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->input('Name');
        $user->email = $request->input('Email');
        $user->telephone = $request->input('Telephone');
        if ($request->input('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->role = $request->input('Role');
        
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $user->photo = $filename;
        }
    
        $user->save();
        
        return redirect()->back()->with('success', 'User updated successfully');
    }
    
    
}
