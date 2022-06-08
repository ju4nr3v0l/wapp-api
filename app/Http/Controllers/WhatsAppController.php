<?php

namespace App\Http\Controllers;

use App\Test;
use App\WhatsappMessage;
use Illuminate\Http\Request;

class WhatsAppController extends Controller
{

    public function receiveMessage(Request $request)
    {
        $payload = $request->getContent();
        $toSave = json_encode($payload);
        $wapMessage = new WhatsappMessage();
        $wapMessage->content = $toSave;
        $wapMessage->channel = 'whatsapp';
        $wapMessage->save();
        return response('guarde en la nueva tabla', 200);
    }
}
