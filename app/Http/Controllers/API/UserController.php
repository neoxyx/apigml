<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{

    public  function index()
    {
        $users = Users::all();
        return response()->json([
            'status' => 200,
            'users' => $users
        ]);
    }

    public  function setCategories()
    {
        $categories = Categories::all();
        return response()->json([
            'status' => 200,
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $user = new Users;
        $user->names = $request->input('names');
        $user->surnames = $request->input('surnames');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->celphone = $request->input('celphone');
        $user->country = $request->input('country');
        $user->id_category = $request->input('id_category');
        $user->save();

        return response()->json([
            'status', 200,
            'message' => 'Usuario agregado exitosamente'
        ]);
    }
}
