<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcaste;
// use Illuminate\Broadcasting\Broadcasters\PusherBroadcaster;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function broadcast(Request $request)
    {
        broadcast(new PusherBroadcaste($request->message))->toOthers();
        return view('broadcast',['message' => $request->message]);
    }

    public function receive(Request $request)
    {
        return view('receive',['message' => $request->message]);
    }
}
