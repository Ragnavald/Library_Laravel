<?php

namespace App\Repositories;
use App\Models\User;
use Illuminate\Http\Request;

interface UserRepository
{
public function add(Request $request):User;
public function setEmailVerify(User|null $user);

public function tokenVerify(string $id, string $token);

public function updatePassword(string $id, string $password);

}
