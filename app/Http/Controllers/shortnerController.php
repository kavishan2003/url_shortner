<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class shortnerController extends Controller
{
    public function shorten(Request $request)
    {

        $request->validate([
            'url' => 'required|url'
        ]);

        $url = $request->input('url');

        
        $existing = ShortUrl::where('original_url', $request->url)->first();

        if ($existing) return response()->json(['short' => url($existing->short_code)]);

        $code = Str::random(8);

        // while (ShortUrl::where('short_code', $code)->exists()) {
        //     $code = Str::random(8);
        // }
        logger($code);

        ShortUrl::create([
            'original_url' => $request->url,
            'short_code' => $code
        ]);

        $shorted_url = ShortUrl::where('original_url',$request->url)->first();

        return response()->json(['short' => url($shorted_url->short_code)]);
    }

    public function redirect($code)
    {
        logger('got');
        $short = ShortUrl::where('short_code', $code)->firstOrFail();
        return redirect()->to($short->original_url);
    }
}
