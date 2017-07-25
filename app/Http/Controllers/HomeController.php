<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Repository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repositoryHelper = new Repository();
        $repositories = $repositoryHelper->getRepositoryList();

        return view('home', ['repositories' => $repositories]);
    }
}
