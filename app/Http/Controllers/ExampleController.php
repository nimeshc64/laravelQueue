<?php

namespace App\Http\Controllers;

use App\Jobs\ExampleJob;

class ExampleController extends Controller
{
    public function addToQueue()
    {
        dispatch(new ExampleJob);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
}
