<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables and assign values
        $name = "Donald Trump";
        $age = "75";

        // Add variables in $data as an associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set cookie variables
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Return response with data and set the cookie
        $response = Response::json($data, 200);
        $response->cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        return $response;
    }
}
