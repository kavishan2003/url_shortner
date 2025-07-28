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

        try {
            $response = Http::timeout(5)->get($url);

            if (!($response->successful())) {
                return back()->withErrors('error', 'URL is unreachable!');
            }
        } catch (\Exception $e) {
        }

        $existing = ShortUrl::where('original_url', $request->url)->first();
        if ($existing) return response()->json(['short' => url($existing->short_code)]);

        $code = Str::random(6);
        while (ShortUrl::where('short_code', $code)->exists()) {
            $code = Str::random(6);
        }

        ShortUrl::create([
            'original_url' => $request->url,
            'short_code' => $code
        ]);

        return response()->json($code);
    }

    public function redirect($code)
    {
        $short = ShortUrl::where('short_code', $code)->firstOrFail();
        return redirect()->to($short->original_url);
    }
}
