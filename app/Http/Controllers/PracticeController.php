<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PracticeInterface;


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
}
