<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait FileUpload
{
    public static function imageUpload($file,String $path){
        
        $image  = time() . '.' . $file->getClientOriginalExtension();
        $path = $path . '/' . $image;
        Storage::disk('public')->put($path, file_get_contents($file));  
       return  $path;
    }
}