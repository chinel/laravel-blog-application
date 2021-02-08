<?php

namespace App\Repositories;
use App\User;

class UserRepository
{

    protected $user;
    public function  __construct(User $user)
    {
        $this->user = $user;
    }

    public function create($attributes){
        return $this->user->create($attributes);
    }



}
