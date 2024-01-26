<?php

namespace App\Http\Controllers;

use App\Events\UserCreated;
use App\Http\Middleware\AuthenticateUser;
use App\Http\Requests\UsersForm;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
class UserController extends Controller
{

    public function __construct(
        private UserRepository $repository)
    {
        $this->middleware(AuthenticateUser::class)->except(['create','store']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsersForm $request)
    {
       /* $ch = curl_init();
        $appKeyAbstract = env('APP_KEY_ABSTRACT');
        $email = $request->get('email');
        $url =  "https://emailvalidation.abstractapi.com/v1/?api_key={$appKeyAbstract}d&email={$email}";
        curl_setopt($ch, CURLOPT_URL, $url);
        $head = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);*/
        $user = $this->repository->add($request);
        event(
            new UserCreated($user)
        );
        return view('Email.EmailCheck', ['instruction' => 'email']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
