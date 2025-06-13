<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function home(){
        $folder = resource_path('images/fotos');
        $files = scandir($folder);

        $files = array_filter($files, function($file) use ($folder) {
            return is_file($folder . '/' . $file);
        });

        $files = array_values($files);
        shuffle($files);

        while (count($files) > 14) {
            array_pop($files);
        }
        
        return view('welcome')->with('files',$files);
    }
}
