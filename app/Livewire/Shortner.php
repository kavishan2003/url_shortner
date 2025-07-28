<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\ShortUrl;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class Shortner extends Component
{

    public $users_url;


    public function shortning()
    {
        // dd(1);
        $this->users_url->validate([
            'url' => 'required|url'
        ]);

        $url = $this->users_ur;

        try {
            $response = Http::timeout(5)->get($url); // Set timeout in seconds

            if (!($response->successful())) {
                return back()->withErrors('error', 'URL is unreachable!');
            }
        } catch (\Exception $e) {
            // return back()->withErrors(['url' => 'URL format is valid, but the site is not reachable. Error: ' . $e->getMessage()])->withInput();
        }

        //my function to test url

        $existing = ShortUrl::where('original_url', $this->users_ur)->first();
        if ($existing) return response()->json(['short' => url($existing->short_code)]);

        $code = Str::random(6);
        while (ShortUrl::where('short_code', $code)->exists()) {
            $code = Str::random(6);
        }

        ShortUrl::create([
            'original_url' => $this->users_ur,
            'short_code' => $code
        ]);

        // $this->dispatch('');
        return response()->json(['short' => true]);
    }

    public function render()
    {
        return view('livewire.shortner');
    }
}
