<?php

namespace App\Http\Controllers;

use App\Events\ChangePassword;
use App\Http\Requests\PasswordForm;
use App\Mail\EmailSetPassword;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Mail;

class EmailResetPassword extends Controller
{
    public function __construct(
        private UserRepository $repository
    )
    {

    }

    public function index()
    {
        return view('login.forgot');
    }

    public function create(Request $request)
    {


        $request->validate(['username' => 'required|email']);
        $user = User::where('email', '=', $request->username)->first();

        if(is_null($user))
        {
            return redirect()->back()->withErrors(['email not found']);
        }


        event(
            new ChangePassword($user)
        );
        return view('Email.EmailCheck',['instruction' => 'Change Password Requisiton']);

    }

    public function verify(string $token, string $id)
    {

        if($this->repository->tokenVerify($id,$token) instanceof User)
        {
            return view('users.password')->
            with(['id' => $id]);
        }

    }

    public function store(PasswordForm $request)
    {

        if($this->repository->updatePassword($request->id,$request->password))
        {
            return view('PasswordChanged');
        }
    }

}
