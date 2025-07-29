<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\ShortUrl;
use Laravel\Prompts\alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\visited_users;
use App\Http\Controllers\Controller;


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

        while (ShortUrl::where('short_code', $code)->exists()) {
            $code = Str::random(8);
        }

        logger($code);

        ShortUrl::create([
            'original_url' => $request->url,
            'short_code' => $code
        ]);

        $shorted_url = ShortUrl::where('original_url', $request->url)->first();

        return response()->json(['short' => url($shorted_url->short_code)]);
    }

    public function redirect(Request $request)
    {


        $short_code = str_replace('/', "", $request->getPathInfo());
        // dd($short_code);



        visited_users::create(
            [
                'short_code' => $short_code,
                'visited_ip' => $request->ip(),
            ]
        );



        $short = ShortUrl::where('short_code', $short_code)->firstOrFail();
        if (Carbon::parse($short->created_at)->diffInHours(now()) >= 24) {
            $short->is_expired = true;
            $short->save();
            // abort(404, 'This short URL is either expired or does not exist.');
        }

        if ($short->is_expired = true) {
              abort(404, 'This short URL is either expired or does not exist.');
        }


        return redirect()->to($short->original_url);
    }
}
