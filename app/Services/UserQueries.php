<?php

namespace App\Services;

use App\Models\User;

class UserQueries
{

    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    //Recupère tous les Jae
    public function getJae()
    {
        return $this->user->role('jae')->get();
    }
}
