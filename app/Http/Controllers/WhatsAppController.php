<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class WhatsAppController extends Controller
{

    public function receiveMessage(Request $request)
    {
        $payload = $request->all();
        $toSave = json_encode($payload);
        $test = new Test();
        $test->nombre = $toSave;
        $test->apellido = 'Request de whatsapp';
        $test->save();
        return response('Deleted Successfully', 200);
    }
}
