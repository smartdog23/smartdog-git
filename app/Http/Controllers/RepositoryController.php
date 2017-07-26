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

    public function open($repository, $type = 'tree', $branch = 'master', $tree = null)
    {
        $client = new Client;
        $gitRepoPath = env('GIT_REPOSITORIES').$repository.'.git';
        $repositoryLoad = $client->getRepository($gitRepoPath);

        if($type == 'tree') {
            $files = $repositoryLoad->getTree($tree ? "$branch:\"$tree\"/" : $branch)->output();

            foreach ($files as &$file) {
                $typeFile = 'blob';
                if($file['type'] == 'folder') {
                    $typeFile = 'tree';
                }
                $url = '/repository/'.$repository.'/'.$typeFile.'/'.$branch.'/'.$tree.'/'.$file['name'];;
                $url = str_replace('//', '/', $url);
                $file['url'] = $url;
            }
            return view('repository.tree', ['url' => $url, 'files' => $files]);

        } else {
            
            $url = $branch.':'.$tree;
            $blob = $repositoryLoad->getBlob($url)->output();
            return view('repository.blob', ['blob' => $blob]);
        }




    }
}
