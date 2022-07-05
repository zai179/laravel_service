<?php

namespace App\Services;
use App\Repositories\RepositoryInterface\UserInterface;
use App\Repositories\RepositoryInterface\CustomerInterface;

class PracticeService  implements PracticeInterface
{
    private $user;
    private $customer;
    public function __construct(UserInterface $user, CustomerInterface $customer)
    {
        $this->user = $user;
        $this->customer = $customer;

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
        $this->customer->customerName();
    }
}
