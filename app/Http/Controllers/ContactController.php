<?php

namespace App\Http\Controllers;

class ContactController
{
    function show(){
        return view('contact-us',[
            'logosrc' => 'bemo-logo2.png',
            'backgroundsrc' => 'contact-us.png'
        ]);
    }
}
