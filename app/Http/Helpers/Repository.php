<?php

namespace App\Http\Helpers;

use Storage;

class Repository
{

    public function getRepositoryList()
    {
        $directories = Storage::disk('repositories')->directories();
        return $directories;
    }

}