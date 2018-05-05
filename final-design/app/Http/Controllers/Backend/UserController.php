<?php

namespace App\Http\Controllers\Backend;

use App\Http\Entity\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{

    /**
     * To show the login UI.
     *
     * @return view => login UI
     */
    public function login()
    {
        return view('backend.admin.login');
    }

    /**
     * Get the params['name', 'password'], make user login.
     *
     * @return view | redirect
     */
    public function saveLogin(Request $request)
    {
        $user = User::where(['name' => $request->name])->first();

        if ($user && $request->password == Crypt::decrypt($user->password)) {
            unset($user->password);
            session(['user' => $user]);

            return redirect('/admin/index');
        } else {

            return view('backend.admin.login', [
                'msg' => 'Username or password is incorrect',
            ]);
        }
    }

    /**
     * To show the index of backup.
     *
     * @return view
     */
    public function index(Request $request)
    {
        return view('backend.admin.index');
    }

    /**
     * To make user logout
     *
     * @return view
     */
    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/admin/login');
    }

    /**
     * To show the UI of change password
     *
     * @return view
     */
    public function changePassword()
    {
        return view('backend.admin.change-password');
    }

    /**
     * To show the detail of a user's information
     *
     * @return view
     */
    public function detail(Request $request)
    {
        return view('backend.admin.detail',[
            'user' => $request->session()->get('user'),
        ]);
    }

    /**
     * Edit the new password
     *
     * @return string
     */
    public function saveChangePassword(Request $request)
    {
        dd($request->all());
    }

}