<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PracticeInterface;


class PracticeController extends Controller
{
    function index(PracticeInterface $practice)
    {
        $practice->getName();
    }
}
