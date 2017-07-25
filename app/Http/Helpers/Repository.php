<?php

namespace App\Http\Helpers;

use Storage;

class Repository
{

    public function getRepositoryList()
    {
        $directories = Storage::disk('repositories')->directories();
        foreach ($directories as &$directory) {
            $directory = str_replace_last('.git', '', $directory);
         }
        return $directories;
    }

}