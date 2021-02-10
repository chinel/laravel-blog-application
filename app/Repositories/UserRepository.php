<?php

namespace App\Repositories;
use App\Models\User;

class UserRepository
{

    protected $user;
    public function  __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Create a new user
     * @param $attributes
     * @return mixed
     */
    public function create($attributes){
        return $this->user->create($attributes);
    }



}
