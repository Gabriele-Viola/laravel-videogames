<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Request;

class QrController extends Controller
{
    public function showQRCore()
    {
        $ip = Request::ip();
        $localIp = 'LOCAL_IP';
        $url = "http://$localIp:8000";

        return view('admin.showqr', compact('url'));
    }
}
