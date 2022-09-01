<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WondeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new \Wonde\Client('31cfe3f30eeb761925c473b1ce16d65f4082103d');
        $school = $client->school("A1930499544");
        return view('index', ['school' => $school]);
    }
}
