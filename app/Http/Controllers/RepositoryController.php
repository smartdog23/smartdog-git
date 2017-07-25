<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gitter\Client;

class RepositoryController extends Controller
{
    public function __construct()
    {
    }

    public function listAll()
    {

    }

    public function create()
    {
        return view('repository.create');
    }

    public function store()
    {
        $data = request()->all();
        $gitRepoPath = env('GIT_REPOSITORIES').$data['inputRepositoryName'].'.git';
        $client = new Client;
        $repository = $client->createRepository($gitRepoPath, true);
        return redirect()->route('home');
    }
}
