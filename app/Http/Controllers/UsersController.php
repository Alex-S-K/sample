<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * sign-up page
     *
     * @return view user sign-up page
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * show user
     *
     * @param  User   $user
     * @return view       user show page
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * receive user registration data
     *
     * @param  Request $request request
     * @return view           redirect to user page
     */
    public function store(Request $request)
    {
        // validate user data
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'email|required|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        // create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // save success message
        session()->flash('success', "Hi~ $user->name, welcome and happy coding");
        return redirect()->route('users.show', [$user]);
    }
}
