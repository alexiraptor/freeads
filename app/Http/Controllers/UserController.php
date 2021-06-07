<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User as UserRequest;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(7);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $userRequest)
    {
        User::create([
            'nickname' => $userRequest->nickname,
            'login' => $userRequest->login,
            'phone_number' => $userRequest->phone_number,
            'email' => $userRequest->email,
            'password' => Hash::make($userRequest->password),
            // 'role' => $userRequest->role,
        ]);
        return redirect()->route('users.index')->with('info', 'Le user a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $userRequest, User $user)
    {
        $user->update($userRequest->all());
        return redirect()->route('users.index')->with('info', 'Le user a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('info', 'Le user a bien été supprimé dans la base de données.');
    }

    /**
     * Display ads for user
     * No CRUD actions possible
     *
     * @return void
     */
    public function display()
    {
        $ads = Ad::paginate(3);;
        return view('users.ads.index', compact('ads'));
    }

    /**
     * detail ad for user
     * No CRUD actions possible
     *
     * @param Ad $ad
     * @return void
     */
    public function detail(Ad $ad)
    {
        return view('users.ads.show', compact('ad'));
    }
}
