<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class WhatsAppController extends Controller
{

    public function receiveMessage(Request $request)
    {
        $payload = $request->get('hub_challenge');
        $toSave = json_encode($payload);
        $test = new Test();
        $test->nombre = $toSave;
        $test->apellido = 'Request de whatsapp';
        $test->save();
        return response($payload, 200);
    }
}
