<?php

namespace App\Services;
use App\Repositories\RepositoryInterface\UserInterface;
use App\Repositories\RepositoryInterface\CustomerInterface;

class PracticeService  implements PracticeInterface
{
    private $user;
    public function __construct(UserInterface $user)
    {
        $this->user = $user;

    }
    function getUserName()
    {
        $this->user->userName();
    }
    function getName()
    {
        echo "zain ali";
    }

    function getCustomerName()
    {
        // $this->customer->customerName();
    }
}
