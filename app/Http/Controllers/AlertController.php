<?php

namespace App\Http\Controllers;

use App\Events\AlertEvent;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function alert(Request $request){

        $message = $request->text;
        broadcast(new AlertEvent($message));
        return "success";

    }
}
