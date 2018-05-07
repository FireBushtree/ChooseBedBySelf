<?php

namespace App\Http\Controllers\Backend;

use App\Http\Entity\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

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
     * @param Request
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
     * @param Request
     * @return string
     */
    public function saveChangePassword(Request $request)
    {
        //1. Validate the new password is repeated correctly
        if ($request->newPassword != $request->retypePassword) {

            return back()->with(['tip' => 'The retype password does not match.']);
        }

        //2. Validate the old password is correct
        $user = User::where(['name' => session()->get('user')->name])->first();

        if (Crypt::decrypt($user->password) != $request->oldPassword) {

            return back()->with(['tip' => 'Old password is incorrect.']);
        }

        //3. Save the new password
        $user->password = Crypt::encrypt($request->newPassword);
        $user->save();

        return redirect('/admin/index')->with(['msg' => 'Change password successfully.']);
    }

    /**
     * To save the information that user edited.
     *
     * @param Request
     *
     * @return redirect ['success' => '/admin/index', 'fail' => 'back']
     */
    public function saveDetail(Request $request)
    {
        //1. Verify the inputed information
        $rules = [
            'telephoneNum' => 'required',
            'email' => 'required | email',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return back()->with(['tip' => $validator->errors()->first()]);
        }

        //2. Save the inputed information
        $user = session()->get('user');
        $user->telephone_num = $request->telephoneNum;
        $user->email = $request->email;
        $user->save();
        session(['user' => $user]);

        return redirect('/admin/index')->with(['msg' => 'Edit information successfully.']);
    }

}
