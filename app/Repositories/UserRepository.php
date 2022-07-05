<?php

namespace App\Repositories;
use  App\Repositories\RepositoryInterface\UserInterface;

class UserRepository implements UserInterface
{
    function userName()
    {
        echo "This is user name ahamd";
    }
}
