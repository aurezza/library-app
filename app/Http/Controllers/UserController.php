<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{
     public function index() {
        return User::all();
    }   

    public function show($id) {
        return User::find($id);
    }   

    public function store(Request $request) {
        $user = User::create($request->all());
        
        // status object created
        return response()->json($user, 201);
    }   

    public function update(Request $request, $id) {
        // change to get request
        $user = User::findOrFail($id);
        $name = $request->name;
        $studentNumber = $request->student_number;
        $user->update([
            'name'=> $name, 
            'student_number'=> $studentNumber
        ]);

        // status success
        return response()->json($user, 200);
    }   

    public function delete($id) {
        $user = User::findOrFail($id);
        $user->delete();
        $user = User::withTrashed()->where('id', $id)->get();

        // status success deletet_at
        return response()->json($user, 200);
    }   
}
