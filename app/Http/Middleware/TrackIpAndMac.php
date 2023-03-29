<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackIpAndMac
{
    public function handle(Request $request, Closure $next)
    {
        $ip_address = $request->ip();
        $mac_address = $this->getMacAddress($ip_address);
        
        DB::table('ips')->insert([
            'ip_address' => $ip_address,
            'mac_address' => $mac_address,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        return $next($request);
    }
    
    private function getMacAddress($ip_address)
    {
        // TODO: Implement code to get MAC address from IP address
        
        return '00:00:00:00:00:00';
    }
}
