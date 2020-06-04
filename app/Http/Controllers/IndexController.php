<?php

namespace App\Http\Controllers;

class IndexController
{
    function show(){

        return view('home',[
            'logosrc' => 'bemo-logo2.png',
            'backgroundsrc' => 'cda-interview-guide.jpg'
        ]);
    }

}
