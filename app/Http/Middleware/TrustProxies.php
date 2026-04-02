<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    // Trust all proxies (Ngrok will be included)
    //protected $proxies = '*';

    // Forwarded headers
    //protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
