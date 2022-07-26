<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PracticeInterface;
use App\Helper\Order;

class PracticeController extends Controller
{
    private $practice;
    function __construct(PracticeInterface $practice)
    {
        $this->practice = $practice;

    }
    function index()
    {
       $this->practice->getName();
    }

    function userName()
    {
        $this->practice->getUserName();
    }

    function order()
    {
        $order = Order::getOrder();
        dd($order);
    }
    function cart()
    {
        $cart = Order::getCart();
        dd($cart);
    }
}
