<?php

namespace App\Repositories;
use  App\Repositories\RepositoryInterface\UserInterface;

class UserRepository implements UserInterface
{
    function userName()
    {
        return "This is user name ahamd";
    }
}
