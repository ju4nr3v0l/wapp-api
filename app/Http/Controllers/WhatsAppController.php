<?php

namespace App\Http\Controllers;



use Laravel\Lumen\Http\Request;

class WhatsAppController extends Controller
{

    public function receiveMessage(Request $request)
    {
        $payload = $request->getContent();
        $toSave = json_encode($payload);
        $test = new Test();
        $test->nombre = $toSave;
        $test->apellido = 'Request de whatsapp';
        $test->save();
        return response('Deleted Successfully', 200);
    }
}
