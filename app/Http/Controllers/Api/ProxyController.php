<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProxyController extends Controller
{
    private $userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36';

    //
    public function get(Request $request)
    {
        try {
            $headers = $request->headers->all();
            $url = $headers['url'];
            unset($headers['url']);
            unset($headers['user-agent']);
            unset($headers['postman-token']);
            unset($headers['host']);
            $response = Http::withUserAgent($this->userAgent)->withHeaders($headers)->get($url[0]);
            return $response->json();
        } catch (\Exception $e) {
            return response()->json(['Could not connect to APIs'], 500);
        }
    }

    public function post(Request $request)
    {
        try {
            $headers = $request->headers->all();
            $url = $headers['url'];
            unset($headers['url']);
            unset($headers['user-agent']);
            unset($headers['postman-token']);
            unset($headers['host']);
            return Http::withUserAgent($this->userAgent)->withHeaders($headers)->post($url[0], $request->all());
        } catch (\Exception $e) {
            return response()->json(['Could not connect to APIs'], 500);
        }
    }

    public function put(Request $request)
    {
        try {
            $headers = $request->headers->all();
            $url = $headers['url'];
            unset($headers['url']);
            unset($headers['user-agent']);
            unset($headers['postman-token']);
            unset($headers['host']);
            return Http::withUserAgent($this->userAgent)->withHeaders($headers)->put($url[0], $request->all());
        } catch (\Exception $e) {
            return response()->json(['Could not connect to APIs'], 500);
        }
    }

    public function patch(Request $request)
    {
        try {
            $headers = $request->headers->all();
            $url = $headers['url'];
            unset($headers['url']);
            unset($headers['user-agent']);
            unset($headers['postman-token']);
            unset($headers['host']);
            return Http::withUserAgent($this->userAgent)->withHeaders($headers)->put($url[0], $request->all());
        } catch (\Exception $e) {
            return response()->json(['Could not connect to APIs'], 500);
        }
    }

    public function delete(Request $request)
    {
        try {
            $headers = $request->headers->all();
            $url = $headers['url'];
            unset($headers['url']);
            unset($headers['user-agent']);
            unset($headers['postman-token']);
            unset($headers['host']);
            return Http::withUserAgent($this->userAgent)->withHeaders($headers)->delete($url[0], $request->all());
        } catch (\Exception $e) {
            return response()->json(['Could not connect to APIs'], 500);
        }
    }
}
