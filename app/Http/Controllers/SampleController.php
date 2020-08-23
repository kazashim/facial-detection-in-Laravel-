<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Core\ServiceBuilder;

class SampleController extends Controller
{
    public function detectFaces()    
    {     

        $cloud = new ServiceBuilder([
            'keyFilePath' => base_path('fda.json'),
            'projectId' => 'facial-detection-app'
        ]);

     }
}
