<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerify;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function __construct(
        private UserRepository $repository
    )
    {

    }
    public function index()
    {
        return view('Email.EmailVerify');
    }

    public function verify(string $token, string $id){
        $user = $this->repository->tokenVerify($id, $token);
        if($this->repository->setEmailVerify($user))
        {
            return to_route('verified');
        }
            return to_route('login');
    }

    public function verified()
    {
        return view('Email.EmailVerified');
    }
}
