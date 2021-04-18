<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersManagingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('is_admin', 'desc')->get();

        return view('admin/users/index', ['users' => $users]);
    }

    /**
     * AJAX
     * 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAjax(Request $request, User $user) 
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        $userUpdated = ['name' => $request->name];

        $user->fill($userUpdated)->save();

        return response()->json([
            'updated' => true,
            'id' => $user->id,
        ]);
    }

    /**
     * AJAX
     * 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAjax(User $user)
    {
        $user->delete();

        return response()->json([
            'deleted' => true,
            'id' => $user->id,
        ]);
    }

    public function op(User $user)
    {
        $userUpdated = ['is_admin' => true];

        $user->fill($userUpdated)->save();

        return redirect()->route('admin/users/index');
    }

    public function deop(User $user)
    {
        $userUpdated = ['is_admin' => false];

        $user->fill($userUpdated)->save();

        return redirect()->route('admin/users/index');
    }
}
