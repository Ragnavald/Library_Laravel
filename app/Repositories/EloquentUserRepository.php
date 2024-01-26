<?php
namespace App\Repositories;

use App\Events\UserCreated;
use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TokenController;

//Classe para lidar com o banco de dados
Class EloquentUserRepository implements UserRepository{
    public function add(Request $request):User
    {
       return DB::transaction(function () use ($request)
       {
            $user = User::create($request->all());
            (new TokenController)->store($user);
            return $user;
        });
    }

    public function setEmailVerify(User|null $user)
    {
        if(!is_null($user))
        {
             $user->update([
                'email_verified_at' => (new \DateTime())->format('Y-m-d H:i:s')
            ]);
            return $user;
        }
        return false;
    }
    public function tokenVerify(string $id, string $token)
    {
        return User::join('tokens','users.id', '=', 'tokens.user_id')->
        select('users.*','tokens.token')->
        where('users.id',$id)->
        where('tokens.token',$token)->first();
    }

    public function updatePassword(string $id, string $password)
    {
            return User::find($id)->update([
            'password' => $password
            ]);
    }
}

