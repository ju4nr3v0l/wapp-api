<?php

namespace App\Http\Controllers;



class WhatsAppController extends Controller
{

    public function receiveMessage()
    {

        return response('Deleted Successfully', 200);
    }
}
