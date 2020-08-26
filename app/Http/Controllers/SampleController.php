<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Core\ServiceBuilder;

class SampleController extends Controller
{
    public function detectFaces()    
    {     

        $cloud = new ServiceBuilder([
            'keyFilePath' => base_path('facial rec-3912246a7c03.json'),
            'projectId' => 'facial-rec-287316'
        ]);

        $vision = $cloud->vision();

     }
}
